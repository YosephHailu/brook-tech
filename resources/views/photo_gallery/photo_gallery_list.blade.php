

<section class="sptb">
    <div class="container" id="PhotoGallery">
        <div class="section-title center-block text-center">
            <h2>Photo gallery</h2>
            <p>our workshop you can browse our wokshop images.</p>
        </div>
        <div class="row">

            @foreach ($photoGalleries as $photoGallery)
            <div class="col-sm-12 col-lg-3 col-md-6">
                <div class="item-card overflow-hidden">
                    <div class="item-card-desc">
                        <a href="{{URL::asset('storage/photos/'.$photoGallery->image)}}" target="_blank"></a>
                        <div class="card text-center overflow-hidden mb-0">
                            <div class="card-img">
                                <img src="{{URL::asset('storage/photos/'.$photoGallery->image)}}" alt="img" class="cover-image">
                            </div>
                            <div class="item-card-text text-right">
                                <h4 class="mb-2">{{$photoGallery->label}}</h4>
                                <small>{{$photoGallery->description}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>