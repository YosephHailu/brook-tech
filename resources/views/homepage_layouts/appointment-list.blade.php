@extends('dashboard')

@section('dashboard-content')
<div class="card-header">
    <h2>Appointments</h2>
</div>

<div class="row px-2">
    <a class="btn" href="{{url('appointment')}}"> All</a><span class="pt-2">|</span>
    @foreach (App\Models\AppointmentStatus::All() as $status)
    <a class="btn" href="{{url('appointment?status='.$status->id)}}">{{$status->status}}</a> <span class="pt-2">|</span>
    @endforeach
    <a class="btn" href="{{url('appointment?expired=true')}}"> expired</a> <span class="pt-2">|</span>
    <a class="btn" href="{{url('appointment?todays=true')}}"> Todays</a>

    <form action="{{url('/appointment')}}">
        <div class="form-group pt-2">
            <input type="text" name="plate_no" placeholder="plate number">
            <input type="submit" value="search">
        </div>
    </form>
</div>
<div class="row">
    @foreach ($appointments as $appointment)
    <div class="col-lg-6 col-md-12">
        <div class="card widgets-cards">
            {{-- <div class="card-header">
            </div> --}}
            <div class="card-body px-0">
                <h4 class="px-4">{{$appointment->name}}</h4>
                <hr class="mt-2">
                <div class="row pl-4 ml-4">
                    <ul class="list-unstyled row col-lg-6">
                        <li style="width: 100%">
                            <i class="fa fa-car mr-3 text-secondary"></i> {{$appointment->plate_no}}
                        </li>
                        <li>
                            <i class="fa fa-phone mr-3 text-secondary"></i> {{$appointment->phone}}
                        </li>

                    </ul>

                    <ul class="list-unstyled text-right row col-lg-6">
                        <li>
                            <i class="fa fa-envelope mr-3 fs-12 text-secondary"></i>{{$appointment->email}}</li>
                        <li>
                            <i class="fa fa-clock-o mr-3 text-secondary"></i> {{$appointment->date}}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-footer p-0">
                <div class="d-flex">
                    <div class="border-right w-150 px-2 
                    bg-{{ ($appointment->appointmentStatus->status =='pending' ? 'warning' : ($appointment->appointmentStatus->status =='confirmed' ? 'primary' : 'success')) }} text-white">
                        <div class="p-3 text-center">
                            @if ($appointment->date > Carbon\Carbon::now() && $appointment->appointmentStatus->status =='completed')
                            <span class="text-danger">
                                <i class="fa fa-trash "></i> Expired</span>
                            @else
                            <i class="fa fa-check"></i> {{$appointment->appointmentStatus->status}}
                            @endif
                        </div>
                    </div>
                    <div class="float-right w-150 text-center">
                        @if ($appointment->appointmentStatus->status != 'completed')
                        <a href="{{url('appointment/'.$appointment->id.'/confirm?status=completed&redirect=true')}}" class="p-3 btn text-center" disabled>
                            Mark as finished
                        </a>
                        @endif
                    </div>

                    <div class="border-right text-center w-150 px-2 bg-danger text-white">

                        <form action="{{url('appointment/'. $appointment->id)}}" method="post">
                            @csrf()
                            @method('delete')

                            <button class="p-3 btn btn-danger text-center">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
