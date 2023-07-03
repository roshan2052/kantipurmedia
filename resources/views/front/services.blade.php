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
                            <img class="img-fluid" src="{{ asset('assets/images/about-service-section-shape-img-2.png') }}" alt="">
                        </figure>
                        <figure class="about-service-section-main-img mb-0 position-relative">
                            <img class="img-fluid" src="{{ asset('assets/images/about-service-section-main-img.png') }}" alt="">
                        </figure>
                        <div class="counter-box position-absolute">
                            <figure class="plus-icon float-left mb-0">
                                <img class="img-fluid" src="{{ asset('assets/images/client-icon.png') }}" alt="">
                            </figure>
                            <span class="number count d-inline-block">1675</span>
                            <span class="suffix d-inline-block">+</span>
                            <span class="customer d-block">Trusted Clients</span>
                        </div>
                        <figure class="about-service-section-shape-img-3 mb-0 position-absolute">
                            <img class="img-fluid" src="{{ asset('assets/images/about-service-section-shape-img-3.png') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-service-section-text position-relative">
                        <figure class="about-service-section-shape-img-1 mb-0 position-absolute">
                            <img class="img-fluid" src="{{ asset('assets/images/about-service-section-shape-img-1.png') }}" alt="">
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

    @include('front.partials.client_review')

@endSection

