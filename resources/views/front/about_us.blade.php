@extends('front.layouts.master')

@section('title') About Us @endSection

@section('banner')

    <!-- BANNER -->
    <section class="sub-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sub-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">About Us</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusm tempor incididunt ut laboreet.</p>
                        <div class="breadcrum">
                            <span class="font-weight-normal d-inline-block text-white">Home / </span>
                            <span class="breadcrum-active font-weight-normal d-inline-block text-white">Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endSection

@section('content')

    <section class="about-service-section contact-page-support-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 d-md-flex align-items-lg-start align-items-md-center">
                    <div class="about-service-section-img-content position-relative wow bounceIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceIn;">
                        <figure class="about-service-section-shape-img-2 mb-0 position-absolute">
                            <img class="img-fluid" src="assets/images/about-service-section-shape-img-2.png" alt="">
                        </figure>
                        <figure class="about-service-section-main-img mb-0 position-relative">
                            <img class="img-fluid" src="assets/images/contact-page-support-section-img.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 text-md-left text-center">
                    <div class="about-service-section-text position-relative">
                        <figure class="about-service-section-shape-img-1 mb-0 position-absolute">
                            <img class="img-fluid" src="assets/images/about-service-section-shape-img-1.png" alt="">
                        </figure>
                        <h2 class="mb-lg-4 mb-md-3 mb-2">About Us</h2>
                        <p>{{ $aboutUs->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-section" style="margin-bottom: 40px">
        <div class="container">
            <div class="partner-section-box text-center">
{{--                <div class="counter-box position-absolute">--}}
{{--                    <figure class="plus-icon float-left mb-0">--}}
{{--                        <img class="img-fluid" src="assets/images/plus-icon.png" alt="">--}}
{{--                    </figure>--}}
{{--                    <span class="number count d-inline-block">1227</span>--}}
{{--                    <span class="suffix d-inline-block">+</span>--}}
{{--                    <span class="customer d-block">New Customers</span>--}}
{{--                </div>--}}
                <div class="row">
                    <div class="col-6 col-md-3">
                        <figure class="plus-icon float-center">
                            <img class="img-fluid" src="{{ asset('assets/images/plus-icon.png') }}" alt="">
                        </figure>
                        <h4 class="number count d-inline-block">{{ $aboutUs->first_content }}</h4>
                        <h4 class="suffix d-inline-block">+</h4>
                        <span class="customer d-block">{{ $aboutUs->first_title }}</span>
                    </div>
                    <div class="col-6 col-md-3">
                        <figure class="plus-icon float-center">
                            <img class="img-fluid" src="{{ asset('assets/images/plus-icon.png') }}" alt="">
                        </figure>
                        <h4 class="number count d-inline-block">{{ $aboutUs->second_content }}</h4>
                        <h4 class="suffix d-inline-block">+</h4>
                        <span class="customer d-block">{{ $aboutUs->second_title }}</span>
                    </div>
                    <div class="col-6 col-md-3">
                        <figure class="plus-icon float-center">
                            <img class="img-fluid" src="{{ asset('assets/images/plus-icon.png') }}" alt="">
                        </figure>
                        <h4 class="number count d-inline-block">{{ $aboutUs->third_content }}</h4>
                        <h4 class="suffix d-inline-block">+</h4>
                        <span class="customer d-block">{{ $aboutUs->third_title }}</span>
                    </div>
                    <div class="col-6 col-md-3">
                        <figure class="plus-icon float-center">
                            <img class="img-fluid" src="{{ asset('assets/images/plus-icon.png') }}" alt="">
                        </figure>
                        <h4 class="number count d-inline-block">{{ $aboutUs->fourth_content }}</h4>
                        <h4 class="suffix d-inline-block">+</h4>
                        <span class="customer d-block">{{ $aboutUs->fourth_title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('front.partials.teams')

    @include('front.partials.partners')

@endSection

