@extends('front.layouts.master')

@section('title') Testimonials @endSection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
@endPush

@section('banner')

    <!-- BANNER -->
    <section class="sub-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sub-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">Testimonials</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusm tempor incididunt ut laboreet.</p>
                        <div class="breadcrum">
                            <span class="font-weight-normal d-inline-block text-white">Home / </span>
                            <span class="breadcrum-active font-weight-normal d-inline-block text-white">Testimonials</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endSection

@section('content')

    <section class="review-section text-center">
        <div class="container">
            <div class="row position-relative">
                <figure class="review-section-shape-img-1 position-absolute mb-0">
                    <img class="img-fluid" src="assets/images/review-section-shape-img-1.png" alt="">
                </figure>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="review-section-box w-100 position-relative">
                        <h2 class="mb-lg-4 mb-md-3 mb-2">Our Clients Reviews</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscinge lit sed do eiusm tempor incididunt ut labore etdolor emagna aliquan enim justo.</p>
                    </div>
                </div>
            </div>
            <div class="row position-relative wow fadeInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
                <div class="col"></div>
                <div class="col-lg-10">
                    <div class="review-section-outer position-relative">
                        <figure class="review-section-quote-img-1 mb-0 position-absolute">
                            <img class="img-fluid" src="assets/images/review-section-quote-img-1.png" alt="">
                        </figure>
                        <figure class="review-section-quote-img-2 mb-0 position-absolute">
                            <img class="img-fluid" src="assets/images/review-section-quote-img-2.png" alt="">
                        </figure>
                        <div class="review-section-inner w-100">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item">
                                        <div class="position-relative">
                                            <figure class="review-section-review-img-1 mb-0 position-relative d-inline-block">
                                                <img class="img-fluid" src="assets/images/review-section-review-img-1.png" alt="">
                                            </figure>
                                            <p class="text-white">Aenean imperdietetiam ultricies nisi vel augue curabitur ullamcorper ultricies nisi nam eget dui etiam rhoncus ecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                                            <span class="name d-block font-weight-bold text-white">Edward Thwaites</span>
                                            <span class="designation d-block font-weight-regular text-white">CEO - Company</span>
                                        </div>
                                    </div>
                                    <div class="carousel-item active">
                                        <div class="position-relative">
                                            <figure class="review-section-review-img-1 mb-0 position-relative d-inline-block">
                                                <img class="img-fluid" src="assets/images/review-section-review-img-1.png" alt="">
                                            </figure>
                                            <p class="text-white">Aenean imperdietetiam ultricies nisi vel augue curabitur ullamcorper ultricies nisi nam eget dui etiam rhoncus ecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                                            <span class="name d-block font-weight-bold text-white">Edward Thwaites</span>
                                            <span class="designation d-block font-weight-regular text-white">CEO - Company</span>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="position-relative">
                                            <figure class="review-section-review-img-1 mb-0 position-relative d-inline-block">
                                                <img class="img-fluid" src="assets/images/review-section-review-img-1.png" alt="">
                                            </figure>
                                            <p class="text-white">Aenean imperdietetiam ultricies nisi vel augue curabitur ullamcorper ultricies nisi nam eget dui etiam rhoncus ecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                                            <span class="name d-block font-weight-bold text-white">Edward Thwaites</span>
                                            <span class="designation d-block font-weight-regular text-white">CEO - Company</span>
                                        </div>
                                    </div>
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

    <section class="testimonials-section">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1170px, 0px, 0px); transition: all 0.25s ease 0s; width: 4095px;"><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-box position-relative mb-0">
                                        <figure class="testimonial-box-quote-img-1 position-absolute">
                                            <img src="assets/images/testimonial-box-quote-img-1.png" alt="">
                                        </figure>
                                        <p>Aenean imperdietetiam ultricies nisi vel augue cura bitur ullamcorper ultricies nisi nam eget dui etiamr honcus ecenas tempus tellus eget condim entumrho ncus sem quam semper libero sit.</p>
                                        <h4 class="font-weight-bold">Edward Thwaites</h4>
                                        <p class="text-size-16 mb-0">CEO - Company</p>
                                        <figure class="testimonial-box-quote-img-2 position-absolute mb-0">
                                            <img src="assets/images/testimonial-box-quote-img-2.png" alt="">
                                        </figure>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-box position-relative mb-0">
                                        <figure class="testimonial-box-quote-img-1 position-absolute">
                                            <img src="assets/images/testimonial-box-quote-img-1.png" alt="">
                                        </figure>
                                        <p>Aenean imperdietetiam ultricies nisi vel augue cura bitur ullamcorper ultricies nisi nam eget dui etiamr honcus ecenas tempus tellus eget condim entumrho ncus sem quam semper libero sit.</p>
                                        <h4 class="font-weight-bold">Edward Thwaites</h4>
                                        <p class="text-size-16 mb-0">CEO - Company</p>
                                        <figure class="testimonial-box-quote-img-2 position-absolute mb-0">
                                            <img src="assets/images/testimonial-box-quote-img-2.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="item"></div>
                                </div></div><div class="owl-item active" style="width: 555px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-box position-relative mb-0">
                                        <figure class="testimonial-box-quote-img-1 position-absolute mb-0">
                                            <img src="assets/images/testimonial-box-quote-img-1.png" alt="">
                                        </figure>
                                        <p>Aenean imperdietetiam ultricies nisi vel augue cura bitur ullamcorper ultricies nisi nam eget dui etiamr honcus ecenas tempus tellus eget condim entumrho ncus sem quam semper libero sit.</p>
                                        <h4 class="font-weight-bold">Edward Thwaites</h4>
                                        <p class="text-size-16 mb-0">CEO - Company</p>
                                        <figure class="testimonial-box-quote-img-2 position-absolute mb-0">
                                            <img src="assets/images/testimonial-box-quote-img-2.png" alt="">
                                        </figure>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 555px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-box position-relative mb-0">
                                        <figure class="testimonial-box-quote-img-1 position-absolute">
                                            <img src="assets/images/testimonial-box-quote-img-1.png" alt="">
                                        </figure>
                                        <p>Aenean imperdietetiam ultricies nisi vel augue cura bitur ullamcorper ultricies nisi nam eget dui etiamr honcus ecenas tempus tellus eget condim entumrho ncus sem quam semper libero sit.</p>
                                        <h4 class="font-weight-bold">Edward Thwaites</h4>
                                        <p class="text-size-16 mb-0">CEO - Company</p>
                                        <figure class="testimonial-box-quote-img-2 position-absolute mb-0">
                                            <img src="assets/images/testimonial-box-quote-img-2.png" alt="">
                                        </figure>
                                    </div>
                                </div></div><div class="owl-item" style="width: 555px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-box position-relative mb-0">
                                        <figure class="testimonial-box-quote-img-1 position-absolute">
                                            <img src="assets/images/testimonial-box-quote-img-1.png" alt="">
                                        </figure>
                                        <p>Aenean imperdietetiam ultricies nisi vel augue cura bitur ullamcorper ultricies nisi nam eget dui etiamr honcus ecenas tempus tellus eget condim entumrho ncus sem quam semper libero sit.</p>
                                        <h4 class="font-weight-bold">Edward Thwaites</h4>
                                        <p class="text-size-16 mb-0">CEO - Company</p>
                                        <figure class="testimonial-box-quote-img-2 position-absolute mb-0">
                                            <img src="assets/images/testimonial-box-quote-img-2.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="item"></div>
                                </div></div><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-box position-relative mb-0">
                                        <figure class="testimonial-box-quote-img-1 position-absolute mb-0">
                                            <img src="assets/images/testimonial-box-quote-img-1.png" alt="">
                                        </figure>
                                        <p>Aenean imperdietetiam ultricies nisi vel augue cura bitur ullamcorper ultricies nisi nam eget dui etiamr honcus ecenas tempus tellus eget condim entumrho ncus sem quam semper libero sit.</p>
                                        <h4 class="font-weight-bold">Edward Thwaites</h4>
                                        <p class="text-size-16 mb-0">CEO - Company</p>
                                        <figure class="testimonial-box-quote-img-2 position-absolute mb-0">
                                            <img src="assets/images/testimonial-box-quote-img-2.png" alt="">
                                        </figure>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 555px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-box position-relative mb-0">
                                        <figure class="testimonial-box-quote-img-1 position-absolute">
                                            <img src="assets/images/testimonial-box-quote-img-1.png" alt="">
                                        </figure>
                                        <p>Aenean imperdietetiam ultricies nisi vel augue cura bitur ullamcorper ultricies nisi nam eget dui etiamr honcus ecenas tempus tellus eget condim entumrho ncus sem quam semper libero sit.</p>
                                        <h4 class="font-weight-bold">Edward Thwaites</h4>
                                        <p class="text-size-16 mb-0">CEO - Company</p>
                                        <figure class="testimonial-box-quote-img-2 position-absolute mb-0">
                                            <img src="assets/images/testimonial-box-quote-img-2.png" alt="">
                                        </figure>
                                    </div>
                                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                <div class="testimonial-btn-outer text-center m-auto">
                    <a href="#">View All Review</a>
                </div>
            </div>
        </div>
    </section>

@endSection

@push('js')
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 30,
                nav: true,
                loop: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 4500,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    }
                }
            })
        })
    </script>
@endPush

