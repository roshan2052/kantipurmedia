@extends('front.layouts.master')

@section('title') Home @endSection

@section('banner')

    <!-- BANNER -->
    @include('front.partials.banner')

@endSection

@section('content')

    <!-- PARTNERS SECTION -->
    @include('front.partials.partners')

    <!-- WHY US SECTION -->
    @include('front.partials.why_us')

    <!-- SOLUTIONS SECTION -->
    {{--@include('front.partials.solutions')--}}

    <!-- CUSTOMER BASE SECTION -->
    @include('front.partials.customer_base')

    <!-- VIDEO SECTION -->
    @include('front.partials.videos')

    <!-- SERVICES SECTION -->
    @include('front.partials.services')

    <!-- TEAMS SECTION -->
    @include('front.partials.teams')

    <!-- TALENT SECTION -->
    @include('front.partials.talent')

    <!-- BLOGS SECTION -->
    @include('front.partials.blogs')

    <!-- REVIEW SECTION -->
    @include('front.partials.client_review')

@endSection

