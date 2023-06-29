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

    <section class="about-service-section accordian-section mb-5">
        <div class="container">
            <div class="row">
                <div class="services-section-inner text-center position-relative">
                    <h2 class="mb-lg-4 mb-md-3 mb-2">Frequently Asked Questions</h2>
                    <p class="mb-0">
                        We have taken great pride in delivering exceptional services and upholding our
                        unwavering commitment to excellence. Our track record as a trusted industry leader reflects our
                        consistent delivery of unparalleled solutions to valued clients.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="accordian-section">
        <div class="container">
            <div class="row">

                @foreach($faqs->chunk(1) as $rowFaqs)
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="about-service-section-text {{ $loop->odd ? 'accordian-section-inner-text' : '' }} position-relative">
                        <div class="accordian-inner">
                            <div id="accordion{{ $loop->iteration }}">
                                @foreach($rowFaqs as $faq)
                                <div class="accordion-card">
                                    <div class="card-header" id="heading{{ $loop->parent->iteration.'-'.$loop->iteration }}">
                                        <h4 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{ $loop->parent->iteration.'-'.$loop->iteration }}" aria-expanded="false" aria-controls="collapse{{ $loop->parent->iteration.'-'.$loop->iteration }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapse{{ $loop->parent->iteration.'-'.$loop->iteration }}" class="collapse" aria-labelledby="heading{{ $loop->parent->iteration.'-'.$loop->iteration }}" style="">
                                        <div class="card-body">
                                            <p class="text-size-16 mb-0 p-0">{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endSection

