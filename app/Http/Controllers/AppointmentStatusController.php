<?php

namespace App\Http\Controllers;

use App\Models\AppointmentStatus;
use Illuminate\Http\Request;

class AppointmentStatusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'update', 'delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $appointmentStatuses = AppointmentStatus::all();
        return view('configuration.configuration')->with('appointmentStatuses', $appointmentStatuses);
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
            'status' => 'required',
        ]);

        AppointmentStatus::create($request->all());

        return redirect()->back()->with(['success' => "Successfully registered", 'message' => 'Successfully registered']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppointmentStatus  $appointmentStatus
     * @return \Illuminate\Http\Response
     */
    public function show(AppointmentStatus $appointmentStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AppointmentStatus  $appointmentStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(AppointmentStatus $appointmentStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppointmentStatus  $appointmentStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppointmentStatus $appointmentStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppointmentStatus  $appointmentStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppointmentStatus $appointmentStatus)
    {
        //
        $appointmentStatus->delete();
        return response()->with(['success' => "Successfully deleted", 'message' => 'Successfully deleted']);
    }
}
