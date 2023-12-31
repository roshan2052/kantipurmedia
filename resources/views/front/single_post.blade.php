@extends('front.layouts.master')

@section('title') Single Blog @endSection

@section('banner')

    <section class="sub-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sub-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">Blog - Single Post</h1>
                        <div class="breadcrum">
                            <span class="font-weight-normal d-inline-block text-white">Home / </span>
                            <span class="breadcrum-active font-weight-normal d-inline-block text-white">Single Post</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endSection

@section('content')

    <section class="blog-posts single-post">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div id="blog" class="single-post01">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image" data-aos="fade-up">
                                    <a href="#">
                                        <img alt="" src="{{ asset('assets/images/post-featured.jpg') }}">
                                    </a>
                                    <!--post-image-->
                                </div>
                                <div class="post-item-description">
                                    <h2 class="single-post-heading font_weight_600">{{ $blog->title }}</h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date color01"><i class="fa fa-calendar-o"></i>{{ $blog->created_at }}</span>
                                        <span class="post-meta-comments color01"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                        <span class="post-meta-category color01"><a href=""><i class="fa fa-tag"></i>Lifestyle, Magazine</a></span>
                                        <div class="post-meta-share float-right">
                                            <ul class="list-unstyled m-0">
                                                <li class="d-inline-block align-top"><a href="#">
                                                        <i class="fab fa-facebook-square"></i>
                                                    </a></li>
                                                <li class="d-inline-block align-top"><a href="#">
                                                        <i class="fab fa-twitter-square"></i>
                                                    </a></li>
                                                <li class="d-inline-block align-top"><a href="#">
                                                        <i class="fab fa-instagram"></i>
                                                    </a></li>
                                                <li class="d-inline-block align-top"><a href="#">
                                                        <i class="fas fa-envelope-square"></i>
                                                    </a></li>
                                            </ul>
                                            <!--post-meta-share-->
                                        </div>
                                        <!--post-meta-->
                                    </div>
                                    {!! $blog->content !!}
                                </div>
                                <div class="post-tags">
                                    <a href="#">Life</a>
                                    <a href="#">Sport</a>
                                    <a href="#">Tech</a>
                                    <a href="#">Travel</a>
                                    <!--post-tags-->
                                </div>

                                <div class="comments" id="comments">
                                    <div class="comment_number text-uppercase font_weight_600">
                                        Comments <span>(2)</span>
                                        <!--comment_number-->
                                    </div>
                                    <div class="comment-list">
                                        <div class="comment" id="comment-1">
                                            <div class="image" data-aos="flip-left"><img alt="" src="{{ asset('assets/images/review1.jpg') }}" class="avatar"></div>
                                            <div class="text">
                                                <h5 class="name font_weight_700">John Doe</h5>
                                                <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                                <div class="text_holder">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    <!--text_holder-->
                                                </div>
                                                <!--text-->
                                            </div>
                                            <div class="comment" id="comment-1-1">
                                                <div class="image" data-aos="flip-left"><img alt="" src="{{ asset('assets/images/review2.jpg') }}" class="avatar"></div>
                                                <div class="text">
                                                    <h5 class="name font_weight_700">John Doe</h5>
                                                    <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                                                        <!--text_holder-->
                                                    </div>
                                                    <!--text-->
                                                </div>
                                                <!--comment-->
                                            </div>
                                            <div class="comment" id="comment-1-2">
                                                <div class="image" data-aos="flip-left"><img alt="" src="{{ asset('assets/images/review1.jpg') }}" class="avatar"></div>
                                                <div class="text">
                                                    <h5 class="name font_weight_700">John Doe</h5>
                                                    <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                                        <!--text_holder-->
                                                    </div>
                                                    <!--text-->
                                                </div>
                                                <!--comment-->
                                            </div>
                                            <!--comment-->
                                        </div>
                                        <div class="comment" id="comment-2">
                                            <div class="image" data-aos="flip-left"><img alt="" src="{{ asset('assets/images/review2.jpg') }}" class="avatar"></div>
                                            <div class="text">
                                                <h5 class="name font_weight_700">John Doe</h5>
                                                <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                <a class="comment-reply-link" href="#">Reply</a>
                                                <div class="text_holder">
                                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                                    <!--text_holder-->
                                                </div>
                                                <!--text-->
                                            </div>
                                            <!--comment-->
                                        </div>
                                        <!--comment-list-->
                                    </div>
                                    <!--comments-->
                                </div>
                                <div class="respond-form" id="respond">
                                    <div class="respond-comment text-uppercase font_weight_600">
                                        Leave a <span>Comment</span>
                                        <!--respond-comment-->
                                    </div>
                                    <form class="form-gray-fields">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="upper font_weight_600" for="name">Name</label>
                                                    <input class="form-control required" name="senderName" placeholder="Enter name" id="name" aria-required="true" type="text">
                                                    <!--form-group-->
                                                </div>
                                                <!--col-->
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="upper font_weight_600" for="email">Email</label>
                                                    <input class="form-control required email" name="senderEmail" placeholder="Enter email" id="email" aria-required="true" type="email">
                                                    <!--form-group-->
                                                </div>
                                                <!--col-->
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="upper font_weight_600" for="website">Website</label>
                                                    <input class="form-control website" name="senderWebsite" placeholder="Enter Website" id="website" aria-required="false" type="text">
                                                    <!--form-group-->
                                                </div>
                                                <!--col-->
                                            </div>
                                            <!--row-->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="upper font_weight_600" for="comment">Your comment</label>
                                                    <textarea class="form-control required" name="comment" rows="9" placeholder="Enter comment" id="comment" aria-required="true"></textarea>
                                                    <!--form-group-->
                                                </div>
                                                <!--col-->
                                            </div>
                                            <!--row-->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group text-center">
                                                    <button class="btn font_weight_600" type="submit">Submit Comment</button>
                                                    <!--form-group-->
                                                </div>
                                                <!--col-->
                                            </div>
                                            <!--row-->
                                        </div>
                                        <!--form-gray-fields-->
                                    </form>
                                    <!--respond-form-->
                                </div>
                                <!--post-item-wrap-->
                            </div>
                            <!--post-item-->
                        </div>
                        <!--single-post01-->
                    </div>
                    <!--col-->
                </div>
                <div class="sidebar sticky-sidebar col-lg-3">
                    <div class="theiaStickySidebar">
                        <div class="widget widget-newsletter">
                            <form id="widget-search-form-sidebar" class="form-inline">
                                <div class="input-group">
                                    <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                                    <div class="input-group-append">
<span class="input-group-btn">
<button type="submit" id="widget-widget-search-form-button" class="btn"><i class="fa fa-search"></i></button>
</span>
                                        <!--input-group-append-->
                                    </div>
                                    <!--input-group-->
                                </div>
                                <!--form-inline-->
                            </form>
                            <!--widget-->
                        </div>
                        <div class="widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent</a>
                                    </li>
                                    <!--nav-tabs-->
                                </ul>
                                <div class="tab-content" id="tabs-posts-content">
                                    <div class="tab-pane fade show active" id="popular" role="tabpanel">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="{{ asset('assets/images/side_post_img01.jpg') }}">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">A true story, that never been told!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="{{ asset('assets/images/side_post_img02.jpg') }}">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="{{ asset('assets/images/side_post_img03.jpg') }}">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <!--post-thumbnail-list-->
                                        </div>
                                        <!--tab-pane-->
                                    </div>
                                    <div class="tab-pane fade" id="featured" role="tabpanel">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="{{ asset('assets/images/side_post_img03.jpg') }}">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="{{ asset('assets/images/side_post_img02.jpg') }}">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="{{ asset('assets/images/side_post_img01.jpg') }}">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">New costs and rise of the economy!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <!--post-thumbnail-list-->
                                        </div>
                                        <!--tab-pane-->
                                    </div>
                                    <div class="tab-pane fade" id="recent" role="tabpanel">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="{{ asset('assets/images/side_post_img02.jpg') }}">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="{{ asset('assets/images/side_post_img01.jpg') }}">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">New costs and rise of the economy!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="{{ asset('assets/images/side_post_img03.jpg') }}">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <!--post-thumbnail-list-->
                                        </div>
                                        <!--tab-pane-->
                                    </div>
                                    <!--tab-content-->
                                </div>
                                <!--tabs-->
                            </div>
                            <!--widget-->
                        </div>
                        <div class="widget widget-categories">
                            <div class="widget-title font_weight_600">Categories</div>
                            <ul>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(2)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(10)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(7)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(3)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(9)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(2)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(10)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(7)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(3)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Coupons</a>
                                    <span class="cat-count-span">(9)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-tweeter">
                            <h4 class="widget-title font_weight_600">Recent Tweets</h4>
                            <div id="twitter-cnt">
                                <ul>
                                    <li>Rule number 1: Don't overthink it
                                        <a href="#" target="_blank" title="Visit this link">https://t.co/T9Vg7b9XuI</a>
                                        <small>Sep/12/2019</small>
                                    </li>
                                    <li>Smart OR Stylish? How do you balance design principles with design trends? <a href="#" target="_blank" title="Visit this link">https://t.co/yBb0HKiksq</a>
                                        <a href="https://t.co/kR5EhraUuK" target="_blank" title="Visit this link">https://t.co/kR5EhraUuK</a>
                                        <small>Sep/10/2019</small>
                                    </li>
                                </ul>
                                <!--twitter-cnt-->
                            </div>
                            <!--widget-->
                        </div>
                        <div class="widget widget-tags">
                            <h4 class="widget-title font_weight_600">Tags</h4>
                            <div class="tags">
                                <a href="#">Design</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Digital</a>
                                <a href="#">Branding</a>
                                <a href="#">HTML</a>
                                <a href="#">Clean</a>
                                <a href="#">Peace</a>
                                <a href="#">Love</a>
                                <a href="#">CSS3</a>
                                <a href="#">jQuery</a>
                                <!--tags-->
                            </div>
                            <!--widget-->
                        </div>
                        <!--theiaStickySidebar-->
                    </div>
                    <!--sidebar-->
                </div>
                <!--row-->
            </div>
        </div>
        <!--container-->
    </section>

@endSection

