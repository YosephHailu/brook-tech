<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentStatus;
use App\Models\Subscription;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['delete', 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $appointments = Appointment::query();
        
        if ($request->expired) {
            $appointmentStatus = AppointmentStatus::firstOrCreate(['status' => 'completed']);

            $appointments = $appointments->whereDate('date', '<', Carbon::today())
                ->where('appointment_status_id', '!=', $appointmentStatus->id);
        }

        if ($request->status) {
            $appointments = $appointments->where('appointment_status_id', $request->status);
        }
        if ($request->plate_no) {
            $appointments = $appointments->where('plate_no', $request->plate_no);
        }

        if ($request->todays) {
            $appointments = $appointments->whereDate('date', Carbon::today());
        }

        return view('homepage_layouts.appointment-list')->with('appointments', $appointments->paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            "email" => 'required',
            "phone" => 'required',
            "plate_no" => 'required',
            "date" => 'required',
        ]);

        $appointmentStatus = AppointmentStatus::firstOrCreate(['status' => 'pending']);

        $request->request->add(['appointment_status_id' => $appointmentStatus->id]);
        $appointment = Appointment::create($request->all());

        if ($request->share)
            Subscription::firstOrCreate(['email' => $request->email]);

        $this->sendMail($appointment);

        return response(['success' => "Successfully registered"]);
    }

    public function sendMail($appointment)
    {
        try {
            $to_name = $appointment->name;
            $to_email = $appointment->email;
            $data = array('appointment' => $appointment);
            Mail::send('emails.mail', $data, function ($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                    ->subject('Welcome to Brook Tech, Please confirm your email address');
                $message->from('support@brook-tech.com', 'Confirmation');
            });
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request, Appointment $appointment)
    {
        //
        $appointmentStatus = AppointmentStatus::firstOrCreate(['status' => $request->status]);

        $appointment->appointment_status_id = $appointmentStatus->id;
        $appointment->save();

        if ($request->redirect)
            return redirect()->back()->with('success', 'Appointment successfully updated');
        else
            return redirect('/confirmed')->with(['success' => 'Your appointment is successfully booked', 'appointment' => $appointment]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
        $appointment->delete();
        return redirect()->back()->with('success', 'Successfully deleted');
    }
}
