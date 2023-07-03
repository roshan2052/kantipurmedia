<section class="services-section position-relative">
    <div class="container">
        <div class="row">
            <div class="services-section-inner text-center position-relative">
                <h2 class="mb-lg-4 mb-md-3 mb-2">Services We Offer</h2>
                <p class="mb-0">We have taken great pride in delivering exceptional services and upholding our
                    unwavering commitment to excellence. Our track record as a trusted industry leader reflects our
                    consistent delivery of unparalleled solutions to valued clients.</p>
                <figure class="services-section-shape-img-1 mb-0 position-absolute">
                    <img class="img-fluid" src="{{ asset('assets/images/services-section-shape-img-1.png') }}" alt="">
                </figure>
            </div>
        </div>

        @foreach($services->chunk(3) as $rowServices)
            <div class="row">
                @foreach($rowServices as $service)
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-md-0 mb-4 text-md-left {{ $loop->last ? '' : 'text-center' }}">
                    <div class="services-section-plan-box hover-effect">
                        <figure>
                            <img src="{{ asset('assets/images/services-section-plan-box-img-1.png') }}" alt="">
                        </figure>
                        <h4 class="font-weight-bold">{{ $service->title }}</h4>
                        <p class="text-size-16">{{ $service->description }}</p>
                        <a class="d-inline-block text-decoration-none" href="{{ route('front.single_service', ['slug' => $service->slug]) }}">Read More
                            <i class="far fa-long-arrow-alt-right position-relative"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="divider"></div>
        @endforeach


        <figure class="services-section-shape-img-2 mb-0 position-absolute">
            <img class="img-fluid" src="{{ asset('assets/images/services-section-shape-img-2.png') }}" alt="">
        </figure>
    </div>
</section>
