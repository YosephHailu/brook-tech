@extends('app')

@section('content')
<!--Sliders Section-->
<div>
    <div class="relative sptb-12 pattern2 bg-background">
        <div class="header-text1 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="text-center text-white ">
                            <h1 class="mb-2"><span class="font-weight-semibold">Brook-Tech car inspection center</span></h1>
                            <p>Driving any motor vehicle without a valid inspection sticker is a traffic violation. It may result in a fine and affect your insurance rate.</p>
                            <ul class="social-icons mb-4 ml-auto">
                                <li>
                                    <a class="social-icon" href="https://www.facebook.com/Brook-Tech-Annual-Inspection-Center-554503634678857"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
                                </li>

                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-telegram"></i></a>
                                </li>
                            </ul>
                            <a class="btn btn-info mb-1 mt-1" href="#Booking"><i class="fa fa-calender"></i> Book inspection appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
        <div class="details-absolute">
        </div>
    </div>
</div>
<!--/Sliders Section-->

<section class="categories">
    <div class="container">
        <div class="card mb-0 box-shadow-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 d-catmb mb-4 mb-lg-0">
                        <div class="d-flex">
                            <div>
                                <span class="bg-primary-transparent icon-service1 text-primary">
                                    <i class="fa fa-car"></i>
                                </span>
                            </div>
                            <div class="ml-4 mt-4">
                                @php
                                $allAppointments = App\Models\Appointment::All();
                                @endphp
                                <h3 class=" mb-0 font-weight-bold">{{Carbon\Carbon::parse($configuration->updated_date)->diffInDays(Carbon\Carbon::now()->addDays(1)) * $configuration->increment_by + $allAppointments->count()}}</h3>
                                <p class="mb-0 text-muted">Total Inspections</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 d-catmb mb-4 mb-sm-0">
                        <div class="d-flex">
                            <div>
                                <span class="bg-primary-transparent icon-service1 text-primary">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                            <div class="ml-4 mt-4">
                                @php
                                $appointmentStatus = App\Models\AppointmentStatus::firstOrCreate(['status' => 'completed']);
                                @endphp
                                <h3 class=" mb-0 font-weight-bold">{{App\Models\Appointment::where('appointment_status_id', $appointmentStatus->id)->get()->count()}}</h3>
                                <p class="mb-0 text-muted">Booked for inspection</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 d-catmb mb-4 mb-lg-0">
                        <div class="d-flex">
                            <div>
                                <span class="bg-primary-transparent icon-service1 text-primary">
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <div class="ml-4 mt-4">
                                <h3 class=" mb-0 font-weight-bold">{{App\Models\Appointment::All()->count()}}</h3>
                                <p class="mb-0 text-muted">Inspected using online booking</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- How it works section --}}
<section class="sptb pt-0" id="HowItWorkis">
    <div class="container">
        <div class="section-title center-block text-center">
            <h2>How It Works?</h2>
            <p>Learn how our online booking system works. </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="">
                    <div class="mb-lg-0 mb-4">
                        <div class="service-card text-center">
                            <div class="bg-white icon-bg  icon-service text-purple about service-card-svg">
                                <!-- Register Svg-->
                                <svg height="482pt" viewBox="-15 0 482 482.60407" width="482pt" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m268.941406 173.949219h25.609375c3.3125 0 6-2.6875 6-6 0-3.316407-2.6875-6-6-6h-25.609375c-3.316406 0-6 2.683593-6 6 0 3.3125 2.683594 6 6 6zm0 0"></path>
                                    <path d="m156.160156 173.949219h89.820313c3.316406 0 6-2.6875 6-6 0-3.316407-2.683594-6-6-6h-89.820313c-3.3125 0-6 2.683593-6 6 0 3.3125 2.6875 6 6 6zm0 0"></path>
                                    <path d="m94.542969 173.949219h38.199219c3.3125 0 6-2.6875 6-6 0-3.316407-2.6875-6-6-6h-38.199219c-3.316407 0-6 2.683593-6 6 0 3.3125 2.683593 6 6 6zm0 0"></path>
                                    <path d="m231.722656 214.8125h-106.386718c-3.316407 0-6 2.6875-6 6s2.683593 6 6 6h106.386718c3.3125 0 6-2.6875 6-6s-2.6875-6-6-6zm0 0"></path>
                                    <path d="m94.542969 226.8125h11.136719c3.3125 0 6-2.6875 6-6s-2.6875-6-6-6h-11.136719c-3.316407 0-6 2.6875-6 6s2.683593 6 6 6zm0 0"></path>
                                    <path d="m94.542969 282.972656h71.257812c3.316407 0 6-2.6875 6-6s-2.683593-6-6-6h-71.257812c-3.316407 0-6 2.6875-6 6s2.683593 6 6 6zm0 0"></path>
                                    <path d="m123.347656 322.875h-28.804687c-3.316407 0-6 2.6875-6 6 0 3.316406 2.683593 6 6 6h28.804687c3.3125 0 6-2.683594 6-6 0-3.3125-2.6875-6-6-6zm0 0"></path>
                                    <path d="m442.261719 132.910156c-7.777344-11.804687-23.644531-15.089844-35.464844-7.339844l-6.515625 4.28125h-.015625l-11.476563 7.550782v-88.261719c-.015624-14.136719-11.472656-25.59375-25.609374-25.609375h-131.363282c-6.847656-14.375-21.347656-23.53125-37.269531-23.53125-15.925781 0-30.425781 9.15625-37.273437 23.53125h-131.363282c-14.136718.015625-25.59375 11.472656-25.609375 25.609375v407.863281c.023438 14.132813 11.476563 25.582032 25.609375 25.601563h337.269532c14.132812-.015625 25.585937-11.46875 25.609374-25.601563v-245.601562l51.964844-34.144532c11.804688-7.777343 15.089844-23.640624 7.339844-35.464843zm-222.734375 175.34375-7.09375-10.800781 203.097656-133.449219 7.097656 10.800782zm111.785156 52.011719h-31.566406c-14.136719.015625-25.59375 11.46875-25.609375 25.605469v30.734375h-212.554688c-2.097656-.003907-3.796875-1.707031-3.800781-3.804688v-319.460937c.003906-2.101563 1.703125-3.800782 3.800781-3.808594h26.960938v16.472656c0 3.3125 2.683593 6 6 6h200.007812c3.3125 0 6-2.6875 6-6v-16.472656h26.957031c2.097657.003906 3.800782 1.707031 3.804688 3.808594v81.828125l-144.167969 94.726562c-.09375.0625-.179687.128907-.269531.199219-.054688.039062-.109375.078125-.164062.121094-.183594.144531-.359376.300781-.527344.464844l-.007813.007812c-.160156.164062-.3125.339844-.453125.523438-.035156.042968-.066406.085937-.101562.128906-.113282.152344-.21875.3125-.316406.476562-.019532.027344-.039063.050782-.058594.082032l-27.257813 46.972656-8.101562 5.320312c-2.769531 1.820313-3.539063 5.539063-1.71875 8.308594 1.820312 2.769531 5.539062 3.539062 8.308593 1.71875l8.101563-5.320312 53.929687-6.375c.03125 0 .0625-.011719.09375-.015626.097657-.015624.191407-.035156.289063-.054687.175781-.03125.347656-.066406.515625-.113281.101562-.027344.203125-.0625.300781-.101563.164063-.054687.324219-.113281.480469-.179687.097656-.042969.199219-.089844.292969-.136719.152343-.078125.300781-.160156.445312-.25.058594-.035156.117188-.058594.175781-.101563l110.210938-72.40625zm-8.242188 12-36.933593 36.933594v-23.328125c.007812-7.511719 6.097656-13.597656 13.609375-13.605469zm-115.609374-60.523437-33.777344 3.996093 17.074218-29.421875 8.351563 12.714844zm-1.617188-24.316407-7.09375-10.800781 187.386719-123.121094.011719-.007812 15.699218-10.316406 7.097656 10.800781zm157.335938-251.894531c7.511718.007812 13.597656 6.09375 13.609374 13.609375v96.144531l-33.476562 22v-73.945312c-.011719-8.726563-7.082031-15.796875-15.804688-15.808594h-26.957031v-18.585938c0-3.316406-2.6875-6-6-6h-58.710937v-11.648437c-.003906-1.929687-.140625-3.855469-.410156-5.765625zm-168.632813-23.527344c16.171875.015625 29.28125 13.125 29.296875 29.300782v17.640624c0 3.3125 2.6875 6 6 6h58.710938v35.058594h-188.011719v-35.058594h58.707031c3.3125 0 6-2.6875 6-6v-17.648437c.019531-16.171875 13.125-29.273437 29.296875-29.292969zm182.242187 445c-.015624 7.507813-6.101562 13.59375-13.609374 13.601563h-337.269532c-7.507812-.011719-13.59375-6.09375-13.609375-13.601563v-407.863281c.007813-7.511719 6.097657-13.601563 13.609375-13.609375h127.75c-.269531 1.910156-.40625 3.835938-.410156 5.765625v11.648437h-58.707031c-3.316407 0-6 2.683594-6 6v18.585938h-26.960938c-8.722656.015625-15.789062 7.082031-15.800781 15.808594v319.464844c.011719 8.71875 7.078125 15.789062 15.800781 15.800781h214.757813c.796875-.007813 1.589844-.066407 2.375-.175781.464844.113281.941406.171874 1.421875.175781 1.734375 0 3.382812-.753907 4.515625-2.058594 1.566406-.832031 2.996094-1.890625 4.25-3.144531l49.207031-49.199219c3.339844-3.324219 5.210937-7.847656 5.199219-12.5625v-120.363281l33.476562-22zm57.375-289.773437-1.507812.988281-20.777344-31.625 1.507813-.988281c6.28125-4.128907 14.71875-2.382813 18.84375 3.898437l5.832031 8.878906c4.117188 6.28125 2.371094 14.710938-3.898438 18.84375zm0 0"></path>
                                </svg>
                                <!-- Register Svg-->
                            </div>
                            <div class="servic-data mt-3">
                                <h4 class="font-weight-semibold mb-2">Book your appointment</h4>
                                <p class="text-muted mb-0">Partners and drivers book inspections online prior to onboarding.
                                    Prior to inspection day you will receive email asking to confirm your appointment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="">
                    <div class="mb-lg-0 mb-4">
                        <div class="service-card text-center">
                            <div class="bg-white icon-bg  icon-service text-purple about service-card-svg">
                                <!-- Create account Svg-->
                                <i class="fa fa-check fa-4x"></i>
                                <!-- Create account Svg-->
                            </div>
                            <div class="servic-data mt-3">
                                <h4 class="font-weight-semibold mb-2">Get inspected</h4>
                                <p class="text-muted mb-0">
                                    Then vehicle gets inspected in one of our inspection center.
                                    <strong>N.B </strong> All required payments shall be performed on inspection day</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="">
                    <div class="mb-sm-0 mb-4">
                        <div class="service-card text-center" id="Subscribe">
                            <div class="bg-white icon-bg  icon-service text-purple about service-card-svg">
                                <!-- add post Svg-->
                                <svg height="496pt" viewBox="-11 0 496 496.00008" width="496pt" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m0 452.042969c0 24.265625 21.007812 43.957031 46.421875 43.957031h272.507813c22.773437 0 41.734374-15.832031 45.425781-36.589844 21.882812-3.410156 38.644531-21.554687 38.644531-43.398437v-198.011719h22.148438c1.542968.03125 3.058593-.390625 4.363281-1.207031l40.515625-26.316407c2.269531-1.46875 3.636718-3.988281 3.636718-6.691406 0-2.699218-1.367187-5.21875-3.636718-6.6875l-40.515625-26.582031c-1.277344-.910156-2.792969-1.4375-4.363281-1.515625h-22.148438v-43.640625c-.199219-2.683594-1.484375-5.167969-3.554688-6.886719l-92.226562-93.957031c-.515625-.738281-1.148438-1.386719-1.878906-1.914063l-.25-.234374c-1.507813-1.523438-3.566406-2.3789068-5.707032-2.367188h-214.984374c-22.773438 0-41.898438 15.835938-45.589844 36.589844-21.882813 3.410156-38.808594 21.554687-38.808594 43.398437zm136-250.042969v-37h281v37zm297-6.574219v-23.226562l17.847656 11.613281zm-124-166.609375 66.339844 68.183594h-55.648438c-2.777344.0625-5.46875-.980469-7.472656-2.902344-2.007812-1.921875-3.164062-4.566406-3.21875-7.34375zm-224.601562-12.816406h208.601562v70.753906c.121094 14.621094 12.070312 26.371094 26.691406 26.246094h67.308594v36h-258.601562c-4.582032.179688-8.246094 3.867188-8.398438 8.449219v1.023437l-23.808594-.472656h-.070312c-4.464844.117188-8.015625 3.78125-8 8.246094l.25 34.820312c.035156 4.394532 3.609375 7.9375 8 7.933594h23.628906v1.175781c0 4.417969 3.984375 7.824219 8.398438 7.824219h16.902343l-.109375 12c-.070312 4.574219 1.644532 8.996094 4.777344 12.328125 2.695312 2.875 6.425781 4.554687 10.363281 4.671875h97.136719c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8h-96.246094c-.015625-1-.027344-.5-.027344-.621094l.113282-12.378906h225.691406v198.011719c0 15.441406-13.5 27.988281-30.089844 27.988281h-272.511718c-16.589844 0-30.398438-12.546875-30.398438-27.988281v-370.785157c0-.40625.261719-.820312.261719-1.242187.023437-.34375.023437-.6875 0-1.035156.585937-14.964844 13.921875-26.949219 30.136719-26.949219zm35.601562 177h-15.683594l-.339844-18.714844 16.023438.1875zm-104-113.011719c0-12.828125 10-23.660156 22-26.964843v362.988281c0 24.261719 20.988281 43.988281 46.398438 43.988281h263.367187c-3.699219 12-15.21875 20-28.835937 20h-272.507813c-16.589844 0-30.421875-12.515625-30.421875-27.957031zm0 0"></path>
                                    <path d="m96.460938 284h131.53125c4.417968 0 8-3.582031 8-8s-3.582032-8-8-8h-131.53125c-4.421876 0-8 3.582031-8 8s3.578124 8 8 8zm0 0"></path>
                                    <path d="m96.460938 323h228.910156c4.421875 0 8-3.582031 8-8s-3.578125-8-8-8h-228.910156c-4.421876 0-8 3.582031-8 8s3.578124 8 8 8zm0 0"></path>
                                    <path d="m96.460938 362h228.910156c4.421875 0 8-3.582031 8-8s-3.578125-8-8-8h-228.910156c-4.421876 0-8 3.582031-8 8s3.578124 8 8 8zm0 0"></path>
                                    <path d="m96.460938 401h228.910156c4.421875 0 8-3.582031 8-8s-3.578125-8-8-8h-228.910156c-4.421876 0-8 3.582031-8 8s3.578124 8 8 8zm0 0"></path>
                                </svg>
                                <!-- add post Svg-->
                            </div>
                            <div class="servic-data mt-3">
                                <h4 class="font-weight-semibold mb-2">Receive report</h4>
                                <p class="text-muted mb-0">
                                    Receive a detailed inspection report afterwards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End how it works section --}}

{{-- Subscription section --}}
<section id="Subscribe">
    <div class="cover-image sptb bg-background-color" style="center center;">
        <div class="content-text mb-0">
            <div class="content-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h2 class="mb-2">Subscribe to our social media</h2>
                        <p class="fs-16 mb-0">It is a long established fact that a reader will be distracted by the readable.</p>
                        <div class=" row mt-5">
                            <div class="input-group col">
                                <button class="btn text-white bg-secondary"><i class="fa fa-facebook"></i> </button>
                                <div class="input-group-append">
                                    <a href="https://facebook.com"> <button type="button" class="btn text-white">
                                        Brooktech
                                    </button></a>
                                </div>
                            </div>

                            <div class="input-group col">
                                <button class="btn text-white bg-secondary"><i class="fa fa-telegram"></i> </button>
                                <div class="input-group-append">
                                    <button type="button" class="btn text-white">
                                        Brooktech
                                    </button>
                                </div>
                            </div>

                            <div class="input-group col">
                                <button class="btn text-white bg-secondary"><i class="fa fa-twitter"></i> </button>
                                <div class="input-group-append">
                                    <button type="button" class="btn text-white">
                                        Brooktech
                                    </button>
                                </div>
                            </div>

                            <div class="input-group col">
                                <button class="btn text-white bg-secondary"><i class="fa fa-youtube"></i> </button>
                                <div class="input-group-append">
                                    <button type="button" class="btn text-white">
                                        Brooktech
                                    </button>
                                </div>
                            </div>

                            <div class="input-group col">
                                <button class="btn text-white bg-secondary"><i class="fa fa-google-plus"></i> </button>
                                <div class="input-group-append">
                                    <a href="mailto:broozera@gmail.com" class="btn text-white">
                                        broozera@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End subscription section --}}

{{-- About us section --}}
<section class="sptb" id="AboutUs">
    <div class="content-text mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="leading-normal">About Us</h3>
                    <p class="leading-normal fs-16">Brook-Tech Vehicle Inspection Center intially came into an idea in 2012 and became real
                        in December 2013. Brook-Tech has colaborated with The Federal Republic of Ethiopian Transport and Communication ministry to open its first vehicle inspection center in the capital city Addis Ababa, Ethiopia. Along with its European counterparts and partners Brook-Tech has imported one of its kind test lanes that brings confidence for the customers and most importantly for the ministry of transport to reduce the number of accidents and fatalities of lives and vehicles.</p>
                    <p class="leading-normal fs-16"> Brook-Tech aspires to become one of the leading inspection centers that focuses its service on customer satisfaction and relaible testing methods vehicles which gurantees the safety of vehicles.
                        Our mission is to reduce roadaccidents, air pollution and deaths caused by technical failures of vehicles not road worthy and provide standardised testing procedures similar to european countries.</p>
                    <a class="btn btn-secondary mt-2 px-5" href="{{url('/about')}}">More...</a>
                </div>
                <div class="col-lg-6">
                    <div class="border-5 br-4 mt-5 overflow-hidden">
                        <div class="owl-carousel testimonial-owl-carousel31 mt-5 mt-lg-0 about-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-912px, 0px, 0px); transition: all 0s ease 0s; width: 3192px;">
                                    <div class="owl-item cloned" style="width: 456px; ">
                                        <div class="item">
                                            <img src="{{asset('assets/images/brook-tech/img1.jpg')}}" style="height:456px; width: 100%;" alt="img">
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 456px; ">
                                        <div class="item">
                                            <img src="{{asset('assets/images/brook-tech/img4.jpg')}}" style="height:456px; width: 100%;" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                            <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End about us section --}}

{{-- News section --}}
@include('news.news_list')
{{-- News section --}}

{{-- Inspection section --}}
@include('homepage_layouts.appointment')
{{-- Inspection seciton --}}

{{-- Our services section --}}
@include('service.services-list')
{{-- Our services section --}}

{{-- Photo gallery section --}}
@include('photo_gallery.photo_gallery_list')
{{-- Photo gallery section --}}

{{-- Testimonials section --}}
@include('testimonial.testimonials')
{{-- Testimonials section --}}


<section>
    <div class="about-1 cover-image sptb" style="background: #CCCCCC center center;">
        <div class="content-text mb-0 text-white info">

            <div class="text-center pb-3">
                <h3>Our clients</h3>
            </div>

            <div class="container">
                <div class="row text-center">
                    @foreach ($clients as $client)
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="bg-transparent status md-lg-0">
                            <img class="counter-icon " src="{{asset('storage/client/'.$client->image)}}" alt="" style="width: 150px; height: 150px">
                            <h5>{{$client->name}}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact us section --}}
@include('contact.contact')
{{-- End contact us section --}}



<section style="position: relative">
    <div class="shade" style="position: absolute; background-color: rgba(0,0,0, 0.2); width: 100%; height: 100%; z-index: 1500;">
        <div class="row" style=" height: 100%">
        <div class="col-md-7"></div>
        <div class="col-md-4  pt-5 ml-md-5 pl-md-5" style="background-color: rgba(0,0,0, 0.4);;">
            <div class="container text-white">
                <h1 class="display-4">
                    Contact us
                </h1>
                <p class="mx-4">Want to get in touch, we love to hear from you, here is how you can reach to us.</p>
            </div>

            <div class="container" style="margin-top: 50px">
                <div class="row px-2 text-muted text-center">
                    <h6 class="text-warning col-8 mx-4 btn btn-outline-primary btn-outlined">
                      <a href="mailto:broozera@gmail.com" class="text-white text-left">  <i class="fa fa-inbox px-1" aria-hidden="true"></i>
                        broozera@gmail.com</a>
                    </h6>
                    <h6 class="text-white col-lg-5 col-md-8 mx-4 btn btn-outline-primary btn-outlined bg-warning">
                      <a href="tel:+251-911-919-868" class="text-white" > <i class="fa fa-phone px-1" aria-hidden="true"></i>
                        +251-911-919-868</a>
                    </h6>

                    <h6 class="text-white col-lg-5 col-md-8 mx-4 btn btn-outline-primary btn-outlined bg-warning">
                      <a href="tel:+251-912-618-530" class="text-white"> <i class="fa fa-phone px-1" aria-hidden="true"></i>
                        +251-912-618-530</a>
                    </h6>
                </div>
            </div></div>
        </div>
    </div>
    <div id="map" class="map"></div>
</section>


@endsection
