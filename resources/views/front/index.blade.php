<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title','HumanX') </title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotline is the perfect WHMCS HTML template for your Hosting Business">
    <meta name="keywords" content="Web hosting, WHMCS template, hosting template">
    <meta name="author" content=“DesigningMedia”>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/special-classes.css') }}" type="text/css">
</head>
<body>

<div class="banner-section-outer">

    <!-- MAIN HEADER -->
    @include('front.partials.header')

    <!-- BANNER -->
    @include('front.partials.banner')
</div>

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
<section class="talent-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="talent-section-box position-relative text-sm-left text-center">
                    <figure class="talent-section-shape-img-1 position-absolute mb-0">
                        <img class="img-fluid" src="assets/images/talent-section-shape-img-1.png" alt="">
                    </figure>
                    <h2 class="mb-lg-4 mb-md-3 mb-2">Do you want to develope Your talent with us? <span class="color">Welcome</span>
                    </h2>
                    <p>Are you seeking a rewarding career where you can unleash your potential, make a meaningful impact, and grow both personally and professionally? Look no further! </p>
                    <div class="talent-section-button-outer list-inline">
                        <div class="career-outer list-inline-item">
                            <a class="career d-inline-block position-relative hover-effect" href="about.html">Careers<i
                                    class="far fa-long-arrow-alt-right position-absolute"></i></a>
                        </div>
                        <div class="list-inline-item">
                            <a class="apply hover-effect d-inline-block" href="sign-up.html">Apply Now</a>
                        </div>
                    </div>
                    <figure class="talent-section-shape-img-2 position-absolute mb-0">
                        <img class="img-fluid" src="assets/images/talent-section-shape-img-2.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BLOGS SECTION -->
@include('front.partials.blogs')

<!-- REVIEW SECTION -->
@include('front.partials.client_review')

@include('front.partials.footer')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script>new WOW().init();</script>
<script src="{{ asset('assets/js/counter-script.js') }}"></script>
</body>
</html>
