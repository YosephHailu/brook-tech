@extends('dashboard')

@section('dashboard-content')
<div class="row">
    <div class="col-md-5 no-print">
        <div class="tab-pane active card" id="tab-timings">
            <div class="card-body text-center">
                Appointments
            </div>
            <div class="table-responsive card-body p-0">
                <table class="table table-bordered border-top p-0 mb-0">
                    <tbody>
                        @foreach ($appointmentStatuses as $status)
                        <tr>
                            <td class="bg-{{ ($status->status =='pending' ? 'warning' : ($status->status =='confirmed' ? 'primary' : 'success')) }}">
                                <a class="text-white" href="{{'appointment?status='.$status->id}}">
                                    {{$status->status}}</a></td>
                            <td class="font-weight-semibold text-center">{{$status->appointment->count()}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6 mx-auto no-print">
        <div class="card text-center">
            <div class="card-body">
                Total visitors
            </div>
            <div class="card-body">
                <h2 class="counter mb-0">{{number_format(App\Models\Configuration::all()->sum('visitors'))}}</h2>
            </div>
        </div>
    </div>

    <div class="col-10 mx-auto ">
        <div class="card">
            <div class="card-body text-center">
                <h4>Todays appointments</h4>
                <small>{{Carbon\Carbon::now()->format('D, M y')}}</small>
            </div>
            <div>
                <table class="table table-hover text-nowrap">
                    <thead class="bg-secondary">

                        <tr>
                            <th class="text-white">Name</th>
                            <th class="text-white">Plate No</th>
                            <th class="text-white">Email</th>
                            <th class="text-white">Phone</th>
                            <th class="text-white">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($todaysAppointments as $todaysAppointment)
                        <tr class="bottom-border">
                            <td>{{$todaysAppointment->name}}</td>
                            <td>{{$todaysAppointment->plate_no}}</td>
                            <td>{{$todaysAppointment->email}}</td>
                            <td>{{$todaysAppointment->phone}}</td>
                            <td>{{Carbon\Carbon::parse($todaysAppointment->date)->format('h:i')}}</td>
                        </tr>
                        @endforeach

                        <tr class="no-print">
                            <td colspan="5" class="text-right">
                                <button type="button" class="btn btn-info" onclick="javascript:window.print();"><i class="icon icon-printer"></i> Print</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


<style>
    .bottom-border {
        border-bottom: 1px solid rgba(110, 110, 110, .2);
    }

    @media print {
        * {
            background-color: white;
        }
        .no-print,
        .no-print * {
            display: none !important;
        }
    }

</style>
