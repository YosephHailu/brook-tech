@extends('app')

@section('content')

<section class="sptb" id="AboutUs">
    <div class="content-text sptb mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5">
                    <h3 class="leading-normal">About Us</h3>
                    <p class="leading-normal fs-16">Brook-Tech Vehicle Inspection Center intially came into an idea in 2012 and became real
                        in December 2013. Brook-Tech has colaborated with The Federal Republic of Ethiopian Transport and Communication ministry to open its first vehicle inspection center in the capital city Addis Ababa, Ethiopia. Along with its European counterparts and partners Brook-Tech has imported one of its kind test lanes that brings confidence for the customers and most importantly for the ministry of transport to reduce the number of accidents and fatalities of lives and vehicles.</p>
                    <p class="leading-normal fs-16"> Brook-Tech aspires to become one of the leading inspection centers that focuses its service on customer satisfaction and relaible testing methods vehicles which gurantees the safety of vehicles.
                        Our mission is to reduce roadaccidents, air pollution and deaths caused by technical failures of vehicles not road worthy and provide standardised testing procedures similar to european countries.</p>
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


<div class="text-center">
    <h2 class="text-center">Meet our staff</h2>
</div>
<div class="px-5">
    <div class="row px-4">
        @foreach ($staffs as $staff)
        <div class="col-md-3">
            <div class="card overflow-hidden">
                <div class="item-card7-img">
                    <div class="item-card7-imgs">
                        <img src="{{asset('storage/staff/'.$staff->image)}}" alt="img" class="cover-image">
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center pt-2 mt-auto">
                        <div>
                            <a class="text-default">{{$staff->name}}</a>
                            <small class="d-block text-muted">{{$staff->job}}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
