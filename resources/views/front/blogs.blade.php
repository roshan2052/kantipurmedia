@extends('front.layouts.master')

@section('title')
    Blogs
@endSection

@section('banner')

    <section class="sub-banner-section mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sub-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">Blog - This is blogs page</h1>
                        <div class="breadcrum">
                            <span class="font-weight-normal d-inline-block text-white">Home / </span>
                            <span
                                class="breadcrum-active font-weight-normal d-inline-block text-white">Infinite Scroll</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endSection

@section('content')

    @include('front.partials.blogs')

@endSection

