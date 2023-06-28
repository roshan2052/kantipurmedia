<section class="teams-section position-relative">
    <div class="container">
        <div class="row">
            <div class="teams-section-inner text-center position-relative">
                <h2 class="mb-lg-4 mb-md-3 mb-2">Meet Our Expert Team!</h2>
                <p class="mb-0">Our dedicated team of professionals is the driving force behind our success. Our team members are highly skilled in their respective fields, continuously honing their craft to stay ahead of the curve and deliver exceptional results.</p>
                <figure class="teams-section-shape-img-1 mb-0 position-absolute">
                    <img class="img-fluid" src="{{ asset('assets/images/team-section-shape-img-1.png') }}" alt="">
                </figure>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-duration="2s">
            @foreach($teams as $team)
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-md-0 mb-4 text-center">
                <div class="teams-section-plan-box">
                    <figure>
                        <img class="img-fluid" src="{{ asset('assets/images/team-plan-box-img-1.png') }}" alt="">
                    </figure>
                    <h4 class="font-weight-bold">{{ $team->member_name }}</h4>
                    <span class="d-block">{{ $team->designation }}</span>
                    <ul class="teams-plan-box-listing p-0 m-0">
                        <li class="list-unstyled d-inline-block">
                            <a class="d-inline-block" href="{{ $team->fb_url }}"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li class="list-unstyled d-inline-block">
                            <a class="d-inline-block" href="{{ $team->twitter_url }}"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li class="list-unstyled d-inline-block">
                            <a class="d-inline-block" href="{{ $team->linkedin_url }}"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li class="list-unstyled d-inline-block">
                            <a class="d-inline-block" href="{{ $team->insta_url }}"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
