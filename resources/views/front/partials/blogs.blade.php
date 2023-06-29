<section class="blog-section position-relative">
    <div class="container">
        <div class="row">
            <div class="blog-section-inner text-center position-relative">
                <h2 class="mb-lg-4 mb-md-3 mb-2">Latest Blog & Articles</h2>
                <p class="mb-0">Stay in the loop and never miss a beat with our timely updates. We're committed to keeping you informed about our latest developments and ensuring you stay connected with all the important news and events.</p>
                <figure class="blog-section-shape-img-1 mb-0 position-absolute">
                    <img class="img-fluid" src="{{ asset('assets/images/blog-section-shape-img-1.png') }}" alt="">
                </figure>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-md-0 mb-4 {{ $loop->last ? '' : 'text-center' }}">
                <div class="blog-section-plan-box">
                    <figure>
                        <img class="img-fluid" src="{{ asset('assets/images/blog-post-img-1.png') }}" alt="">
                    </figure>
                    <ul class="blog-plan-box-listing p-0">
                        <li class="list-unstyled d-inline-block">
                            <a class="d-inline-block text-decoration-none meta" href="#">Admin -</a>
                        </li>
                        <li class="list-unstyled d-inline-block">
                            <a class="d-inline-block text-decoration-none meta" href="#">{{ $blog->created_at}}</a>
                        </li>
                        <li class="list-unstyled d-inline-block">
                            <a class="d-inline-block text-decoration-none meta" href="#">- News</a>
                        </li>
                    </ul>
                    <a class="text-decoration-none" href="{{ route('front.single_blog', ['slug' => $blog->slug]) }}">
                        <h4 class="font-weight-bold">{{ $blog->title }}</h4>
                    </a>
                    <a class="read-more d-inline-block text-decoration-none" href="{{ route('front.single_blog', ['slug' => $blog->slug]) }}">Read More
                        <i class="far fa-long-arrow-alt-right position-relative"></i>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
        <div class="mx-auto mt-5 text-center">
            {{ $blogs->links() }}
        </div>

    </div>
</section>
