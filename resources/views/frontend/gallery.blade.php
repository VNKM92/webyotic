@extends('frontend.layouts.app')
{{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

    @section('content')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        @if(isset($page) && !empty($page->template))
                        <h1 class="wow fadeInUp" data-cursor="-opaque">{!! ucfirst($page->template) !!} </h1>
                        @endif
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Photo Gallery Start -->
    <div class="page-gallery">
        <div class="container">
            <!-- gallery section start -->
            <div class="row gallery-items page-gallery-box">
                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp">
                        <a href="images/gallery-1.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="images/gallery-1.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.2s">
                        <a href="images/gallery-2.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="images/gallery-2.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.4s">
                        <a href="images/gallery-3.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="images/gallery-3.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.6s">
                        <a href="images/gallery-4.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="images/gallery-4.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="0.8s">
                        <a href="images/gallery-5.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="images/gallery-5.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1s">
                        <a href="images/gallery-6.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="images/gallery-6.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>
                
                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1.2s">
                        <a href="images/gallery-7.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="images/gallery-7.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1.4s">
                        <a href="images/gallery-8.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="images/gallery-8.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>

                <div class="col-lg-4 col-6">
                    <!-- Image Gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="1.6s">
                        <a href="images/gallery-9.jpg" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="images/gallery-9.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Image Gallery end -->
                </div>
            </div>
            <!-- gallery section end -->
        </div>
    </div>
    <!-- Photo Gallery End -->
@endsection
