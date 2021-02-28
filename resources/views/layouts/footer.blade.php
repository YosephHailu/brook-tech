<section>
    <footer class="bg-dark-purple text-white no-print">
        <div class="footer-main border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <h6>Our services</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                @foreach (App\Models\Service::All()->take(6) as $service)
                                <a href="#" class="btn footer-btn-outline btn-sm btn-pill mb-1">{{$service->title}}</a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <h6>Use full links</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a target="_blank" href="http://motr.gov.et/"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Minister of transport</a></li>
                            <li><a target="_blank" href="http://www.developmentaid.org"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Federal Road Transport Authority</a></li>
                            <li><a target="_blank" href="http://www.ZayRidewww.zayride.com"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> ZayRide Ethiopia</a></li>
                            <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.multibrains.taxi.passenger.ridepassengeret&hl=en&gl=US"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Ride passenger app</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <h6 class="mt-6 mt-xl-0">Contact</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#"><i class="fa fa-home mr-3 text-secondary"></i>Ethiopia, Addis Ababa</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope mr-3 fs-12 text-secondary"></i> broozera@gmail.com</a></li>
                            <li>
                                <a href="#"><i class="fa fa-phone mr-3 text-secondary"></i> +251-911-919-868, +251-912-618-530</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-print mr-3 text-secondary"></i> +251-911-919-868, +251-912-618-530</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <h6 class="mb-2 mt-6 mt-xl-0">Subscribe</h6>
                        <form action="{{url('subscription')}}" method="POST" enctype="multipart/form-data">

                            <div class="input-group">
                                <input type="text" name="email" class="form-control br-tl-3  br-bl-3" placeholder="Email">
                                <div class="input-group-append ">
                                    <button type="submit" class="btn btn-secondary br-tr-3 br-br-3 pl-5 pr-5">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark-purple text-white-50 p-3">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12 col-sm-12  mt-2 mb-2 text-center ">
                        Copyright © 2020 <a href="#" class="fs-14 text-secondary">Brook tech</a>. Designed by <a href="spruko.com" class="fs-14 text-secondary">IO TECH</a>
                    </div>
                    <div class="col-lg-12 col-sm-12 text-center mb-2 mt-2">
                        <ul class="social-icons mb-0">
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-rss"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
