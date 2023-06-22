@extends('front.layouts.master')

@section('title') Faq @endSection

@section('banner')

    <!-- BANNER -->
    <section class="sub-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sub-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">FAQ</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusm tempor incididunt ut laboreet.</p>
                        <div class="breadcrum">
                            <span class="font-weight-normal d-inline-block text-white">Home / </span>
                            <span class="breadcrum-active font-weight-normal d-inline-block text-white">FAQ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endSection

@section('content')

    <section class="about-service-section accordian-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 d-md-flex align-items-lg-start align-items-md-center">
                    <div class="about-service-section-img-content position-relative wow bounceIn" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounceIn;">
                        <figure class="about-service-section-shape-img-2 mb-0 position-absolute">
                            <img class="img-fluid" src="assets/images/about-service-section-shape-img-2.png" alt="">
                        </figure>
                        <figure class="about-service-section-main-img mb-0 position-relative">
                            <img class="img-fluid" src="assets/images/accordion-section-img.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-service-section-text position-relative">
                        <figure class="about-service-section-shape-img-1 mb-0 position-absolute">
                            <img class="img-fluid" src="assets/images/about-service-section-shape-img-1.png" alt="">
                        </figure>
                        <h2 class="mb-lg-4 mb-md-3 mb-2 text-md-left text-center">Information Frequently Asked Question</h2>
                        <p class="text-md-left text-center">Lorem ipsum dolor sit amet consectetur adipiscinge lit sed do eiusm tempor incididunt ut labore.</p>
                        <div class="accordian-inner">
                            <div id="accordion">
                                <div class="accordion-card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Is Worldwide a Call Center Agency?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" style="">
                                        <div class="card-body">
                                            <p class="text-size-16 mb-0 p-0">Fonec quam felis ultricies necpellentesque eu pretium quissem. nulla consequat massa quis enimdonec pede justo fringilla vel aliquet nec arcu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingTwo">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                I need a business plan?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" style="">
                                        <div class="card-body">
                                            <p class="text-size-16 mb-0 p-0">Fonec quam felis ultricies necpellentesque eu pretium quissem. nulla consequat massa quis enimdonec pede justo fringilla vel aliquet nec arcu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingThree">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                How do you contact the customer?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" style="">
                                        <div class="card-body">
                                            <p class="text-size-16 mb-0 p-0">Fonec quam felis ultricies necpellentesque eu pretium quissem. nulla consequat massa quis enimdonec pede justo fringilla vel aliquet nec arcu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="accordian-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-service-section-text accordian-section-inner-text position-relative">
                        <div class="accordian-inner">
                            <div id="accordion1">
                                <div class="accordion-card">
                                    <div class="card-header" id="headingFour">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Is Worldwide a Call Center Agency?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" style="">
                                        <div class="card-body">
                                            <p class="text-size-16 mb-0 p-0">Fonec quam felis ultricies necpellentesque eu pretium quissem. nulla consequat massa quis enimdonec pede justo fringilla vel aliquet nec arcu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingFive">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                I need a business plan?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" style="">
                                        <div class="card-body">
                                            <p class="text-size-16 mb-0 p-0">Fonec quam felis ultricies necpellentesque eu pretium quissem. nulla consequat massa quis enimdonec pede justo fringilla vel aliquet nec arcu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingSix">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                How do you contact the customer?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" style="">
                                        <div class="card-body">
                                            <p class="text-size-16 mb-0 p-0">Fonec quam felis ultricies necpellentesque eu pretium quissem. nulla consequat massa quis enimdonec pede justo fringilla vel aliquet nec arcu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-service-section-text position-relative">
                        <div class="accordian-inner">
                            <div id="accordion2">
                                <div class="accordion-card">
                                    <div class="card-header" id="headingSeven">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Is Worldwide a Call Center Agency?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" style="">
                                        <div class="card-body">
                                            <p class="text-size-16 mb-0 p-0">Fonec quam felis ultricies necpellentesque eu pretium quissem. nulla consequat massa quis enimdonec pede justo fringilla vel aliquet nec arcu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingEight">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                I need a business plan?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" style="">
                                        <div class="card-body">
                                            <p class="text-size-16 mb-0 p-0">Fonec quam felis ultricies necpellentesque eu pretium quissem. nulla consequat massa quis enimdonec pede justo fringilla vel aliquet nec arcu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="card-header" id="headingNine">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                How do you contact the customer?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" style="">
                                        <div class="card-body">
                                            <p class="text-size-16 mb-0 p-0">Fonec quam felis ultricies necpellentesque eu pretium quissem. nulla consequat massa quis enimdonec pede justo fringilla vel aliquet nec arcu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('front.partials.talent')

@endSection

