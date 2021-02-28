    <!--Topbar-->
    <div class="header-main no-print">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-sm-4 col-7">
                        <div class="top-bar-left d-flex">
                            <div class="clearfix">
                                <ul class="socials">
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Header -->
        <div class="sticky">
            <div class="horizontal-header clearfix ">
                <div class="container">
                    <a href="{{url('/')}}" id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                    <span class="smllogo"><a href="{{url('/')}}" class="d-flex logo-height logo-svg">
                            <img src="{{asset('assets/images/brand/logo.jpg')}}" style="max-height: 40px" alt="image"></a>
                    </span>
                    <a href="ad-list.html" class="callusbtn"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- /Mobile Header -->

        <div class="horizontal-main  bg-dark-transparent clearfix" style="background-color: #25236A">
            <div class="horizontal-mainwrapper container clearfix">
                <div class="desktoplogo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/images/brand/logo2.png')}}" style="" class="mt-1" alt=""></a>
                </div>
                <div class="desktoplogo-1">
                    <a href="{{url('/')}}"><img src="{{asset('assets/images/brand/logo2.png')}}" alt="image" style="height: 40px"></a>
                </div>
                <!--Nav-->
                <nav class="horizontalMenu clearfix d-md-flex bg-dark-transparent">
                    <ul class="horizontalMenu-list" style="background-color: #25236A; color: white">
                        <li><a href="#">Home</a></li>
                        <li><a href="#Subscribe">Subscribe </a></li>
                        <li><a href="#AboutUs">About us </a></li>
                        <li><a href="#News">News </a></li>
                        <li><a href="#Booking">Booking </a></li>
                        <li><a href="#Services">Services </a></li>
                        <li><a href="#PhotoGallery">Gallery </a></li>
                        <li><a href="#Testimonials">Testimonials</a></li>
                        <li><a href="#contactUs">Join us </a></li>
                        <li class="d-lg-none mt-5 pb-5 mt-lg-0">
                            <span><a class="btn btn-orange" href="ad-list.html">Add Listing</a></span>
                        </li>
                    </ul>
                </nav>
                <!--Nav-->
            </div>
            <div class="body-progress-container">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="myBar"></div>
            </div>
        </div>
    </div>

    <style>
        .horizontalMenu-list a {
            color: white !important;
        }

    </style>
