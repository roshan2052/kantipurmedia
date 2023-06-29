@extends('front.layouts.master')

@section('title') Services @endSection

@section('banner')

    <section class="sub-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sub-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">Services</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusm tempor incididunt ut laboreet.</p>
                        <div class="breadcrum">
                            <span class="font-weight-normal d-inline-block text-white">Home / </span>
                            <span class="breadcrum-active font-weight-normal d-inline-block text-white">Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endSection

@section('content')

    @include('front.partials.services')

    <section class="about-service-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-service-section-img-content position-relative wow bounceIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceIn;">
                        <figure class="about-service-section-shape-img-2 mb-0 position-absolute">
                            <img class="img-fluid" src="assets/images/about-service-section-shape-img-2.png" alt="">
                        </figure>
                        <figure class="about-service-section-main-img mb-0 position-relative">
                            <img class="img-fluid" src="assets/images/about-service-section-main-img.png" alt="">
                        </figure>
                        <div class="counter-box position-absolute">
                            <figure class="plus-icon float-left mb-0">
                                <img class="img-fluid" src="assets/images/client-icon.png" alt="">
                            </figure>
                            <span class="number count d-inline-block">1675</span>
                            <span class="suffix d-inline-block">+</span>
                            <span class="customer d-block">Trusted Clients</span>
                        </div>
                        <figure class="about-service-section-shape-img-3 mb-0 position-absolute">
                            <img class="img-fluid" src="assets/images/about-service-section-shape-img-3.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-service-section-text position-relative">
                        <figure class="about-service-section-shape-img-1 mb-0 position-absolute">
                            <img class="img-fluid" src="assets/images/about-service-section-shape-img-1.png" alt="">
                        </figure>
                        <h2 class="mb-lg-4 mb-md-3 mb-2">Best Call Center Service For Your Business</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscinge lit sed do eiusm tempor incididunt ut labore.</p>
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-6 col-6">
                                <div class="about-service-section-listing-outer">
                                    <ul class="about-service-section-listing p-0 m-0">
                                        <li class="list-unstyled"><i class="fal fa-check-circle"></i>Safe &amp; Trusted</li>
                                        <li class="list-unstyled"><i class="fal fa-check-circle"></i>Fast Response</li>
                                        <li class="list-unstyled"><i class="fal fa-check-circle"></i>Improve Speech</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-6">
                                <div class="about-service-section-listing-outer">
                                    <ul class="about-service-section-listing p-0 m-0">
                                        <li class="list-unstyled"><i class="fal fa-check-circle"></i>Call Notification</li>
                                        <li class="list-unstyled"><i class="fal fa-check-circle"></i>Call Recording</li>
                                        <li class="list-unstyled"><i class="fal fa-check-circle"></i>Report Analytics</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col"></div>
                        </div>
                        <div class="progress-bar-outer position-relative">
                            <span class="d-block font-weight-normal">Communication</span>
                            <div class="progress-bar">
                                <div class="bar" data-size="90" style="width: 90%;">
                                    <span class="perc">90%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar-outer position-relative">
                            <span class="d-block font-weight-normal">Chat Support</span>
                            <div class="progress-bar">
                                <div class="bar variation-1" data-size="75" style="width: 75%;">
                                    <span class="perc">75%</span>
                                </div>
                            </div>
                        </div>
                        <div class="about-service-section-btn-outer d-lg-block d-none">
                            <a class="d-inline-block hover-effect" href="about.html">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                    <div class="carousel-item active carousel-item-left">
                                        <div class="position-relative">
                                            <figure class="review-section-review-img-1 mb-0 position-relative d-inline-block">
                                                <img class="img-fluid" src="assets/images/review-section-review-img-1.png" alt="">
                                            </figure>
                                            <p class="text-white">Aenean imperdietetiam ultricies nisi vel augue curabitur ullamcorper ultricies nisi nam eget dui etiam rhoncus ecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                                            <span class="name d-block font-weight-bold text-white">Edward Thwaites</span>
                                            <span class="designation d-block font-weight-regular text-white">CEO - Company</span>
                                        </div>
                                    </div>
                                    <div class="carousel-item carousel-item-next carousel-item-left">
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

@endSection

