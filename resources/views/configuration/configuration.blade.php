@extends('dashboard')

@section('dashboard-content')
<div class="row">
    <div class="card mb-xl-0 col-md-6">
        <div class="p-3">
            <ul class="list my-3">
                <li>
                    <a href="#" class="btn footer-btn-outline btn-sm btn-pill bg-secondary mb-1">Total inspections : {{$config->updated_at->diffInDays(Carbon\Carbon::now()->addDays(1)) * $config->increment_by}}</a>
                    <a href="#" class="btn footer-btn-outline btn-sm btn-pill bg-secondary mb-1">Increment by : {{$config->increment_by}}</a>
                </li>
            </ul>
            <form action="/configuration" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input required value="{{$config->total_inspection}}" type="text" class="form-control col-4 mx-1" id="total_inspection" name="total_inspection" placeholder="Total inspection">
                    <input required value="{{$config->increment_by}}" type="text" class="form-control col-4 mx-1" id="increment_by" name="increment_by" placeholder="Increment by">
                    <input type="submit" value="Save" class="btn btn-primary col-3 m-auto">
                </div>
            </form>
        </div>
    </div>

    <div class="card mb-xl-0 col-md-6">
        <div class="p-3">
            <form action="/appointment-status" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input required type="text" class="form-control col-8" id="status" name="status" placeholder="Enter appointment status">
                    <input type="submit" value="Save" class="btn btn-primary col-3 m-auto">
                </div>
            </form>
        </div>
        <div class="card-body p-0 pb-3">
            <ul class="list-unstyled widget-spec  mb-0">
                @foreach ($appointmentStatuses as $appointmentStatus)
                <hr class="my-3">
                <div class="px-2">
                    <i class="fa fa-check text-success" aria-hidden="true"></i> {{$appointmentStatus->status}}
                    <i class="fa fa-trash large text-danger float-right btn py-0" style="font-size: 18px" aria-hidden="true"></i>
                </div>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
