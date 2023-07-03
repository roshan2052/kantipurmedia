@extends('front.layouts.master')

@section('title') Contact @endSection

@section('banner')

    <!-- BANNER -->
    <section class="sub-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sub-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">Contact Us</h1>
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
                            <img class="img-fluid" src="{{ asset('assets/images/about-service-section-shape-img-2.png') }}" alt="">
                        </figure>
                        <figure class="about-service-section-main-img mb-0 position-relative">
                            <img class="img-fluid" src="{{ asset('assets/images/contact-page-support-section-img.png') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 text-md-left text-center">
                    <div class="about-service-section-text position-relative">
                        <figure class="about-service-section-shape-img-1 mb-0 position-absolute">
                            <img class="img-fluid" src="{{ asset('assets/images/about-service-section-shape-img-1.png') }}" alt="">
                        </figure>
                        <h2 class="mb-lg-4 mb-md-3 mb-2">Get in Touch With Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscinge lit sed do eiusm tempor incididunt ut labore.</p>
                        <div class="contact-box hover-effect">
                            <div class="row">
                                <div class="col-md-3 col-12">
                                    <figure class="mb-0 text-center">
                                        <img class="img-fluid" src="{{ asset('assets/images/email-icon.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-9 col-12">
                                    <h4 class="font-weight-bold">Email:</h4>
                                    <a class="d-block text-decoration-none text-size-16" href="{{ config('Site.email') }}">{{ config('Site.email') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-box hover-effect">
                            <div class="row">
                                <div class="col-md-3 col-12">
                                    <figure class="mb-0 text-center">
                                        <img class="img-fluid" src="{{ asset('assets/images/phone-icon.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-9 col-12">
                                    <h4 class="font-weight-bold">Phone:</h4>
                                    <a class="d-block text-decoration-none text-size-16" href="{{ config('Site.contact') }}">{{ config('Site.contact') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-box hover-effect mb-0">
                            <div class="row">
                                <div class="col-md-3 col-12">
                                    <figure class="mb-0 text-center">
                                        <img class="img-fluid" src="{{ asset('assets/images/mail-icon.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-9 col-12">
                                    <h4 class="font-weight-bold">Address:</h4>
                                    <span class="d-block text-size-16">{{ config('Site.location') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customer-base-section about-page-customer-base-section contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 order-xl-1 order-lg-1 order-md-1 order-sm-2 order-2 text-md-left text-center">
                    <div class="customer-base-section-text position-relative">
                        <figure class="contact-form-shape-img-1 mb-0 position-absolute">
                            <img class="img-fluid" src="{{ asset('assets/images/contact-form-shape-img-1.png') }}" alt="">
                        </figure>
                        <h2 class="mb-lg-4 mb-md-3 mb-4">How Can We Help Your Business To Grow?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscinge lit sed do eiusm tempor incididunt ut labore.</p>
                        <div class="contact-form">
                            <form method="POST" action="{{ route('front.contact_us.save') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name:" name="name" id="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email:" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control textarea" placeholder="Message" rows="3" name="message" id="message" required></textarea>
                                </div>
                                <div class="submitform-button">
                                    <button type="submit" id="submit" class="submitform-btn hover-effect d-block">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 order-xl-2"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 order-xl-2 order-lg-2 order-md-2 order-sm-1 order-1 d-md-flex align-items-lg-start align-items-md-center">
                    <div class="customer-base-section-img-content position-relative wow bounceIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceIn;">
                        <figure class="customer-base-section-shape-img-2 mb-0 position-absolute">
                            <img class="img-fluid" src="{{ asset('assets/images/customer-base-section-shape-img-2.png') }}" alt="">
                        </figure>
                        <figure class="customer-base-section-main-img mb-0 text-right position-relative">
                            <img class="img-fluid" src="{{ asset('assets/images/contact-form-section-img.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="review-section map-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="map-outer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8404599049227!2d144.95373931584484!3d-37.81720574201434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2s!4v1644919999731!5m2!1sen!2s" width="1110" height="360" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endSection

