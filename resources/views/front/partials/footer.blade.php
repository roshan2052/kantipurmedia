<!-- FOOTER -->
<section class="footer-section">
    <div class="container">
        <div class="row position-relative">
            <div class="col-xl-5 col-lg-4 col-md-5 col-sm-6 text-sm-left text-center">
                <div class="footer-logo-content">
                    <figure class="footer-logo">
                        @if (!empty(config('Site.logo')))
                            <img class="img-fluid" src="{{ asset('storage/configuration-images/'.config('Site.logo')) }}" alt="" style="width: 200px">
                        @else
                            <img class="img-fluid" src="{{ asset('assets/images/humanx-logo.png') }}" alt="" style="width: 200px">
                        @endif
                    </figure>
                    <p class="text-size-16 mb-lg-4 mb-md-3 mb-3">{{ config('Site.biography') }}</p>
                    <ul class="footer-logo-content-listing p-0 m-0">
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="list-unstyled d-inline-block"><a class="d-inline-block" href="#"><i class="fab fa-pinterest-square"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 d-lg-block d-md-none d-sm-none d-none">
                <div class="footer-links-content">
                    <h5 class="font-weight-normal">Quick Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal"
                                                                 href="/">Home</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal"
                                                                 href="{{ route('front.teams') }}">Team</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal"
                                                                 href="{{ route('front.services') }}">Services</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal"
                                                                 href="{{ route('front.blogs') }}">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 d-md-block d-sm-none d-none">
                <div class="footer-support-content">
                    <h5 class="font-weight-normal">Support</h5>
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal"
                                                                 href="{{ route('front.contact_us') }}">Contact Us</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal"
                                                                 href="{{ route('front.about_us') }}">About Us</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal"
                                                                 href="{{ route('front.faqs') }}">FAQ</a></li>
                        <li><i class="fas fa-caret-right"></i><a class="text-decoration-none font-weight-normal"
                                                                 href="{{ route('front.testimonials') }}">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-sm-left text-center d-sm-block d-none">
                <div class="footer-info-content">
                    <h5 class="font-weight-normal">Get in Touch</h5>
                    <ul class="list-unstyled mb-0">
                        <li><span class="font-weight-bold">Email:</span>
                            <a class="text-decoration-none font-weight-normal" href="mailto:info@hotline.com">{{ config('Site.email') }}</a>
                        </li>
                        <li><span class="font-weight-bold">Phone:</span>
                            <a class="text-decoration-none font-weight-normal" href="tel:+12345678900">{{ config('Site.contact') }}</a>
                        </li>
                        <li><span class="font-weight-bold">Address:</span>
                            <a class="text-decoration-none font-weight-normal" href="#">{{ config('Site.location') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <figure class="footer-secrion-shape-img-1 mb-0 position-absolute">
                <img class="img-fluid" src="{{ asset('assets/images/footer-section-shape-img-1.png') }}" alt="">
            </figure>
        </div>
    </div>
</section>

<!-- FOOTER BAR -->
<div class="footer-bar text-center">
    <div class="container">
        <div class="row">
            <div class="footer-bar-content w-100">
                <p class="text-size-16 mb-0">Copyright ©{{ date('Y') }} HumanX All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>
