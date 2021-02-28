@extends('app')

@section('content')
<section class="sptb">
    <div class="container sptb">
        <div class="row">
            @auth

            <div class="col-xl-3 col-lg-12 col-md-12 no-print">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Controllers</h3>
                    </div>
                    <div class="item1-links mb-0">
                        <a href="{{url('/dashboard')}}" class="d-flex border-bottom {{ (Request::is('dashboard') ? 'active' : '') }}">
                            <i class="fa fa-edit small mt-1 pr-2"></i> Dashboard
                        </a>

                        <a href="{{url('/appointment')}}" class="d-flex border-bottom {{ (Request::is('appointment') ? 'active' : '') }}">
                            <i class="fa fa-edit small mt-1 pr-2"></i> Appointments
                        </a>

                        <a href="{{url('/news')}}" class="d-flex border-bottom {{ (Request::is('news') ? 'active' : '') }}">
                            <i class="fa fa-edit small mt-1 pr-2"></i> News
                        </a>

                        <a href="{{url('/service')}}" class="d-flex border-bottom {{ (Request::is('service') ? 'active' : '') }}">
                            <i class="fa fa-edit small mt-1 pr-2"></i> Services
                        </a>

                        <a href="{{url('/photo-gallery')}}" class="d-flex border-bottom {{ (Request::is('photo-gallery') ? 'active' : '') }}">
                            <i class="fa fa-edit small mt-1 pr-2"></i> Photo gallery
                        </a>

                        <a href="{{url('/feedback')}}" class="d-flex border-bottom {{ (Request::is('feedback') ? 'active' : '') }}">
                            <i class="fa fa-edit small mt-1 pr-2"></i> Feedbacks
                        </a>

                        <a href="{{url('/client')}}" class="d-flex border-bottom {{ (Request::is('client') ? 'active' : '') }}">
                            <i class="fa fa-edit small mt-1 pr-2"></i> Clients
                        </a>

                        <a href="{{url('/staff')}}" class="d-flex border-bottom {{ (Request::is('staff') ? 'active' : '') }}">
                            <i class="fa fa-edit small mt-1 pr-2"></i> staff
                        </a>

                        <a href="{{url('/profile')}}" class="d-flex border-bottom {{ (Request::is('profile') ? 'active' : '') }}">
                            <i class="fa fa-edit small mt-1 pr-2"></i> Profile
                        </a>

                        <a href="{{url('/configuration')}}" class="d-flex border-bottom {{ (Request::is('configuration') ? 'active' : '') }}">
                            <i class="fa fa-edit small mt-1 pr-2"></i> Configuration
                        </a>

                        <a class="d-flex border-bottom bg-danger text-white" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-power-off small mt-1 pr-2"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
            @endauth

            <div class="col-xl-9 col-lg-12 col-md-12 mx-auto">
                @include('layouts.messages')
                @yield('dashboard-content')
            </div>
        </div>
    </div>
</section>
@endsection
