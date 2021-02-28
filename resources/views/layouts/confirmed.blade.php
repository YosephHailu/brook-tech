@extends('app')

@section('content')
<div class="my-5 sptb"></div>

<div class="col-md-8 m-auto">
    <div class="card m-auto card-blog-overlay2 bg-primary minh-210 br-2 spacing">
        <div class="card-body br-2">
            <div class="text-center text-white">
                <h1 class="mb-1">Email confirmed</h1>
                <p>Thank you for using our online booking platform your appointment is successfully booked, Please leave a feedback about our online booking system.</p>
            </div>
            <div class="search-background bg-transparent">
                <div class="form row no-gutters">
                    <div class="col-xl-2 col-lg-3 col-md-12 mb-0 m-auto">
                        <a href="{{url('/')}}" class="btn btn-lg btn-block btn-secondary br-tl-md-0 br-bl-md-0">Finish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="my-5 sptb"></div>

@endsection
