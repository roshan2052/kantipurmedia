<section class="review-section text-center">
    <div class="container">
        <div class="row position-relative">
            <figure class="review-section-shape-img-1 position-absolute mb-0">
                <img class="img-fluid" src="assets/images/review-section-shape-img-1.png" alt="">
            </figure>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="review-section-box w-100 position-relative">
                    <h2 class="mb-lg-4 mb-md-3 mb-2">Our Clients Reviews</h2>
                    <p class="mb-0">We believe that the voice of our clients speaks volumes about the quality of our
                        services and the level of satisfaction we deliver. We are honored to have worked with a
                        diverse range of clients who have experienced firsthand the value and impact of our
                        solutions.</p>
                </div>
            </div>
        </div>
        <div class="row position-relative wow fadeInUp" data-wow-duration="2s"
             style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
            <div class="col"></div>
            <div class="col-lg-10">
                <div class="review-section-outer position-relative">
                    <figure class="review-section-quote-img-1 mb-0 position-absolute">
                        <img class="img-fluid" src="{{ asset('assets/images/review-section-quote-img-1.png') }}"
                             alt="">
                    </figure>
                    <figure class="review-section-quote-img-2 mb-0 position-absolute">
                        <img class="img-fluid" src="{{ asset('assets/images/review-section-quote-img-2.png') }}"
                             alt="">
                    </figure>
                    <div class="review-section-inner w-100">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($testimonials as $testimonial)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <div class="position-relative">
                                            <figure
                                                class="review-section-review-img-1 mb-0 position-relative d-inline-block">
                                                <img class="img-fluid"
                                                     src="{{ asset('assets/images/review-section-review-img-1.png') }}"
                                                     alt="">
                                            </figure>
                                            <p class="text-white">{{ $testimonial->review }}</p>
                                            <span
                                                class="name d-block font-weight-bold text-white">{{ $testimonial->client_name }}</span>
                                            <span class="designation d-block font-weight-regular text-white">{{ $testimonial->client_designation }} - {{ $testimonial->company_name }}</span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="far fa-long-arrow-alt-left position-absolute"></i>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="far fa-long-arrow-alt-right position-absolute"></i>
            </a>
        </div>
    </div>
</section>
