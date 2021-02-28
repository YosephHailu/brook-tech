<!doctype html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bizdire - Business Directory and classifieds premium html5 CSS template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="business directory website,online business directory website,directory listing sites,bootstrap form template,bootstrap templates,responsive web design,bootstrap website templates,business directory,business directory template,business listing,buy web templates,directory,directory html template,directory listing html template,directory website template,html list template,html template,html5 responsive template,html5 template,local business directory,local business listing,online business directory,online directory,premium,premium bootstrap templates,small business directory,classified,Premium business directory Templates,Directory & Listing HTML Template,business listing websites">
    <link rel="icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('favicon.ico')}}" />

    <!-- Title -->
    <title>Brook tech car inspection</title>

    <!-- Bootstrap Css -->
    <link href="{{URL::asset('assets/plugins/bootstrap-4.4.1-dist/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" />

    <!-- Font-awesome  Css -->
    <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" />

    <!--Horizontal Menu-->
    <link href="{{URL::asset('assets/plugins/horizontal/horizontal-menu/horizontal.css')}}" rel="stylesheet" />

    <!-- Owl Theme css-->
    <link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

    <!--Select2 Plugin -->
    <link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

    <!-- Auto Complete css -->
    <link href="{{URL::asset('assets/plugins/autocomplete/jquery.autocomplete.css')}}" rel="stylesheet">

    <!-- Custom scroll bar css-->
    <link href="{{URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

    <!-- Color-Skins -->
    <link id="theme" href="{{URL::asset('assets/color-skins/color1.css')}}" rel="stylesheet" />
    
    <!-- JQuery js-->
    <script src="{{URL::asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>

    <!-- Ckeditor js-->
    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    {{-- <script src="{{URL::asset('assets/js/ckeditor.js')}}"></script> --}}


    <style>
        .py-1 {
            padding: 10px 0px;
        }

    </style>
</head>
<body>

    <!--Loader-->
    <div id="global-loader">
        <img src="{{URL::asset('assets/images/static/loader.png')}}" class="loader-img floating" alt="">
    </div>

    {{-- Toolbar section --}}
    @include('layouts.header')
    {{-- End toolbar section --}}

    {{-- @include('layouts.messages') --}}

    <!--Sliders Section-->
    @yield('content')
    <!--/Sliders Section-->

    <!--BreadCrumb-->
    @yield('breadcrumb')
    <!--/BreadCrumb-->

    <!--Footer Section-->
    @include('layouts.footer')
    <!--Footer Section-->

    <!-- Report Modal -->
    <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="examplereportLongTitle">Report Abuse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="report-name" placeholder="Enter url">
                    </div>
                    <div class="form-group">
                        <select name="country" id="select-countries2" class="form-control custom-select select2-no-search">
                            <option value="1" selected>Categories</option>
                            <option value="2">Spam</option>
                            <option value="3">Identity Theft</option>
                            <option value="4">Online Shopping Fraud</option>
                            <option value="5">Service Providers</option>
                            <option value="6">Phishing</option>
                            <option value="7">Spyware</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="report-email" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-0">
                        <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

    <!-- Bootstrap js -->
    <script src="{{URL::asset('assets/plugins/bootstrap-4.4.1-dist/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-4.4.1-dist/js/bootstrap.min.js')}}"></script>

    <!--JQuery Sparkline Js-->
    <script src="{{URL::asset('assets/js/vendors/jquery.sparkline.min.js')}}"></script>

    <!--Owl Carousel js -->
    <script src="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{URL::asset('assets/js/owl-carousel.js')}}"></script>

    <!--Horizontal Menu-->
    <script src="{{URL::asset('assets/plugins/horizontal/horizontal-menu/horizontal.js')}}"></script>

    <!--JQuery TouchSwipe js-->
    <script src="{{URL::asset('assets/js/jquery.touchSwipe.min.js')}}"></script>

    <!-- Google Maps Plugin -->
    {{-- <script src="https://maps.google.com/maps/api/js?key=AIzaSyCnU5YfCHwqd7c5oDhqTjwSV9UUNXGo5zw"></script> --}}

    <!--Select2 js -->
    <script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/select2.js')}}"></script>

    <!-- sticky Js-->
    <script src="{{URL::asset('assets/js/sticky.js')}}"></script>

    <!-- Vertical scroll bar Js-->
    <script src="{{URL::asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/vertical-scroll/vertical-scroll.js')}}"></script>

    <!-- Swipe Js-->
    <script src="{{URL::asset('assets/js/swipe.js')}}"></script>

    <!-- Cover-image Js-->
    <script src="{{URL::asset('assets/js/scripts2.js')}}"></script>

    <!-- Custom Js-->
    <script src="{{URL::asset('assets/js/custom.js')}}"></script>
</body>
</html>
