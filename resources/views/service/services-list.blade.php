<section class="sptb bg-white" id="Services">
    <div class="container">
        <div class="section-title center-block text-center">
            <h2>Our Services</h2>
            <p>We provide multiple services to our customers across ethiopia.</p>
        </div>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="cat-item text-center">
                            <a href="#"></a>
                            <div class="cat-img category-svg">
                                {{-- <i class="fa fa-car fa-2x text-yellow"></i> --}}
                                <img src="{{URL::asset('storage/service/'.$service->image)}}" style="border-radius: 50%" alt="" />
                            </div>
                            <div class="cat-desc">
                                <h5 class="mb-0">{{$service->title}}</h5>
                                <p>{{$service->description}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
