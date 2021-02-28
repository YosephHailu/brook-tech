<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentStatus;
use App\Models\Client;
use App\Models\Configuration;
use App\Models\Feedback;
use App\Models\News;
use App\Models\PhotoGallery;
use App\Models\Service;
use App\Models\Staff;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['dashboard', 'configuration']);
    }

    public function dashboard()
    {
        $appointmentStatuses = AppointmentStatus::all();
        $todaysAppointments = Appointment::whereDate('date', Carbon::today());
        return view('dashboard_statistics')->with([
            'appointmentStatuses' => $appointmentStatuses,
            'todaysAppointments' => $todaysAppointments->get()
        ]);
    }

    public function home()
    {
        $configuration = Configuration::first();
        $configuration->visitors = $configuration->visitors + 1;
        $configuration->save();

        return $configuration;
        return Carbon::now()->addDays(1)->diffInDays($configuration->updated_at);

        $feedbacks = Feedback::whereShare(true)->orderByDesc('created_at')->get();
        $photoGalleries = PhotoGallery::orderByDesc('updated_at')->get();
        $services = Service::orderByDesc('created_at')->get();
        $news = News::orderByDesc('created_at')->get();
        $clients = Client::orderByDesc('created_at')->get();

        return view('home')->with(['configuration' => $configuration, 'clients' => $clients->take(9), 'feedbacks' => $feedbacks->take(9), 'news' => $news->take(24), 'services' => $services->take(12), 'photoGalleries' => $photoGalleries->take(24)]);
    }

    public function configuration()
    {
        $appointmentStatuses = AppointmentStatus::all();
        $config = Configuration::first();
        return view('configuration.configuration', compact('config', 'appointmentStatuses'));
    }

    public function updateConfiguration(Request $request)
    {
        $config = Configuration::first();
        $config->total_inspection = $request->total_inspection;
        $config->increment_by = $request->increment_by;
        $config->save();

        return redirect()->back()->with('success', 'Successfully updated');
    }

    public function registerForm()
    {
        return view('auth.register')->with(['user' => User::first()]);
    }

    public function about()
    {
        $staffs = Staff::orderByDesc('created_at')->orderByDesc('updated_at')->get();

        return view('about.about')->with('staffs', $staffs);
    }

    public function confirmed()
    {
        return view('layouts.confirmed');
    }
}
