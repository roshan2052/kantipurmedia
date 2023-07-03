@extends('front.layouts.master')

@section('title') Single Service @endSection

@section('banner')

    <section class="sub-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="sub-banner-text">
                        <h1 class="text-white mb-lg-4 mb-3">Blog - Single Service</h1>
                        <div class="breadcrum">
                            <span class="font-weight-normal d-inline-block text-white">Home / </span>
                            <span class="breadcrum-active font-weight-normal d-inline-block text-white">Single Service</span>
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
                                        <img alt="" src="assets/images/post-featured.jpg">
                                    </a>
                                    <!--post-image-->
                                </div>
                                <div class="post-item-description">
                                    <h2 class="single-post-heading font_weight_600">{{ $service->title }}</h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date color01"><i class="fa fa-calendar-o"></i>{{ $service->created_at }}</span>
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
                                    {!! $service->description !!}
                                </div>
                                <div class="post-tags">
                                    <a href="#">Life</a>
                                    <a href="#">Sport</a>
                                    <a href="#">Tech</a>
                                    <a href="#">Travel</a>
                                    <!--post-tags-->
                                </div>

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
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img01.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">A true story, that never been told!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img02.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img03.jpg">
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
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img03.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Beautiful nature, and rare feathers!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img02.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img01.jpg">
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
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img02.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">The most happiest time of the day!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img01.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">New costs and rise of the economy!</a>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                    <!--post-thumbnail-content-->
                                                </div>
                                                <!--post-thumbnail-entry-->
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img data-aos="fade-up" alt="" src="assets/images/side_post_img03.jpg">
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
                            </ul>
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

