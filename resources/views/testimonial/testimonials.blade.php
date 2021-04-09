<div class="container mb-4" id="Testimonials">
    <div class="text-center pb-3">
        <i class="fa fa-heart fa-2x text-danger bounceIn animated infinite" aria-hidden="true"></i>
        <h3 class="text-primary">Loved by our customers</h3>
        <p>What our customers say about our services</p>
    </div>

    <div class="row">
        @foreach ($feedbacks as $feedback)
        <div class="px-2 col-md-4">
            <div class="card" data-anijs="if: scroll, on: window, do: fadeInLeft  animated, before: scrollReveal">
                <div class="card-body text-center bg-white">
                    <i class="fa fa-quote-left text-primary" aria-hidden="true"></i>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{Str::limit($feedback->message, 300, '...')}}
                    </p>
                    <div class="row px-3">
                        <div class="cat-item text-center">

                            <div class="cat-img category-svg">

                                <img src="{{URL::asset('assets/images/img.jpg')}}" alt="Avatar" style="border-radius: 50%">
                            </div>
                        </div>
                        <div class="col-9 text-lef mt-4">
                            <h5 class="mb-1">{{$feedback->name}}</h5>
                            <span class="mb-1 text-muted">
                                {{$feedback->job}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
