<header class="header">
    <div class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="/">
                    <figure class="navbar-logo mb-0">
                        @if (!empty(config('Site.logo')))
                            <img class="img-fluid" src="{{ asset('storage/configuration-images/'.config('Site.logo')) }}" alt="" style="width: 200px">
                        @else
                            <img class="img-fluid" src="{{ asset('assets/images/humanx-logo.png') }}" alt="" style="width: 200px">
                        @endif
                    </figure>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link scroll" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="{{ route('front.about_us') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="{{ route('front.services') }}">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu list-unstyled hotline-dropdown" aria-labelledby="navbarDropdown">
                                <ul class="dropdown-menu-list list-unstyled">
                                    <li><a class="dropdown-item scroll hotline-menu" href="{{ route('front.faqs') }}">FAQ</a></li>
                                    <li><a class="dropdown-item scroll hotline-menu" href="{{ route('front.testimonials') }}">Testimonials</a></li>
                                    <li><a class="dropdown-item scroll hotline-menu" href="{{ route('front.teams') }}">Team</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="{{ route('front.contact_us') }}">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link scroll" href="{{ route('front.blogs') }}">
                                Blogs
                            </a>
{{--                            <div class="dropdown-menu list-unstyled hotline-dropdown" aria-labelledby="navbarDropdownMenu">--}}
{{--                                <ul class="dropdown-menu-list list-unstyled" id="hotline-dropdown-list">--}}
{{--                                    <li class="nav-item"><a class="dropdown-item scroll hotline-menu" href="single-post.html">Single Post</a></li>--}}
{{--                                    <li class="nav-item"><a class="dropdown-item scroll hotline-menu" href="infinite-scroll.html">Infinite Scroll</a></li>--}}
{{--                                    <li class="nav-item"><a class="dropdown-item scroll hotline-menu" href="load-more.html">Load More</a></li>--}}
{{--                                    <li class="nav-item"><a class="dropdown-item scroll hotline-menu" href="one-column.html">One Column</a></li>--}}
{{--                                    <li class="nav-item"><a class="dropdown-item scroll hotline-menu" href="two-column.html">Two Column</a></li>--}}
{{--                                    <li class="nav-item"><a class="dropdown-item scroll hotline-menu" href="three-column.html">Three Column</a></li>--}}
{{--                                    <li class="nav-item"><a class="dropdown-item scroll hotline-menu" href="three-colum-sidbar.html">Three Column Sidebar</a></li>--}}
{{--                                    <li class="nav-item"><a class="dropdown-item scroll hotline-menu" href="four-column.html">Four Column</a></li>--}}
{{--                                    <li class="nav-item"><a class="dropdown-item scroll hotline-menu" href="six-colum-full-wide.html">Six Column</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
