@extends('front.layouts.master')

@section('title')
    Blogs
@endSection

@section('banner')

    <section class="sub-banner-section">
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

    <section class="blog-posts">
        <div class="container">
            <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div id="blog" class="three-column col-xl-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                        <a href="/blogs/test">
                                            <img alt="" src="assets/images/standard_post_img01.jpg">
                                        </a>
                                        <span class="post-meta-category">
                                            <a href="">Lifestyle</a>
                                        </span>
                                        <!--post-image-->
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date">
                                            <i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                                        <span class="post-meta-comments">
                                            <a href=""><i class="fa fa-comments-o"></i>33 Comments</a>
                                        </span>
                                        <h2>
                                            <a href="/blogs/test">Standard post with a single image </a>
                                        </h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                            commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante
                                            posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="/blogs/test" class="item-link">Read More <i
                                                class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div id="blogslider" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <img src="assets/images/standard_post_img02.jpg" alt="">
                                                <!--carousel-item-->
                                            </div>
                                            <div class="carousel-item active">
                                                <img src="assets/images/standard_post_img06.jpg" alt="">
                                                <!--carousel-item-->
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/standard_post_img04.jpg" alt="">
                                                <!--carousel-item-->
                                            </div>
                                            <!--carousel-inner-->
                                        </div>
                                        <!-- Left and right controls -->
                                        <a class="carousel-control-prev" href="#blogslider" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#blogslider" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                        <!--blogslider-->
                                    </div>
                                    <span class="post-meta-category"><a href="">Technology</a></span>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                        <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                            commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante
                                            posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="/blogs/test" class="item-link">Read More <i
                                                class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                        <a href="/blogs/test">
                                            <img alt="" src="assets/images/standard_post_img03.jpg">
                                        </a>
                                        <span class="post-meta-category">
                                            <a href="/blogs/test">Science</a>
                                        </span>
                                        <!--post-image-->
                                    </div>
                                    <div class="post-item-description">
                                    <span class="post-meta-date">
                                        <i class="fa fa-calendar-o"></i>Jan 21, 2017
                                    </span>
                                    <span class="post-meta-comments">
                                        <a href="/blogs/test"><i class="fa fa-comments-o"></i>33 Comments</a>
                                    </span>
                                        <h2><a href="#">Standard post with a single image </a></h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                            commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante
                                            posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="/blogs/test" class="item-link">Read More <i
                                                class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-audio position-relative">
                                        <a href="/blogs/test">
                                            <img alt="" src="assets/images/standard_post_img05.jpg"> </a>
                                        <span class="post-meta-category">
                                            <a href="">Audio</a>
                                        </span>
                                        <audio class="position-absolute" controls="">
                                            <source src="horse.ogg" type="audio/ogg">
                                            <source src="assets/audio/horse.mp3" type="audio/mpeg">
                                        </audio>
                                        <!--post-audio-->
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments">
                                            <a href=""><i class="fa fa-comments-o"></i>33 Comments</a>
                                        </span>
                                        <h2>
                                            <a href="/blogs/test">Self Hosted HTML5 Audio (mp3) with image cover</a>
                                        </h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                            commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante
                                            posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="/blogs/test" class="item-link">Read More <i
                                                class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-video">
                                        <!-- <style>.embed-container { position: relative; padding-bottom: 66.40%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style> -->
                                        <div class="embed-container">
                                            <iframe src="https://player.vimeo.com/video/157467640?background=1"></iframe>
                                        </div>
                                        <span class="post-meta-category"><a href="">Video</a></span>
                                        <!--post-video-->
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                        <h2><a href="#">This is a example post with Vimeo video</a></h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                            commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante
                                            posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="/blogs/test" class="item-link">Read More <i
                                                class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="float-left w-100 post-item border mb-lg-4 mb-0">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-video">
                                        <div class="fluid-width-video-wrapper">
                                            <iframe width="560" height="376"
                                                    src="https://www.youtube.com/embed/dA8Smj5tZOQ"></iframe>
                                            <!--fluid-width-video-wrapper-->
                                        </div>
                                        <span class="post-meta-category"><a href="">Video</a></span>
                                        <!--post-video-->
                                    </div>
                                    <div class="float-left w-100 post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                        <h2><a href="#">This is a example post with YouTube</a></h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                            commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante
                                            posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="/blogs/test" class="item-link">Read More <i
                                                class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                    </div>
                    <!--blog-->
                </div>
                <!--row-->
            </div>
        </div>
    </section>

@endSection

