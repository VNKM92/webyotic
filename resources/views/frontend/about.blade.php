@extends('frontend.layouts.app')

@section('content')
@if(!empty($page?->content))
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 max-w-screen-xl prose prose-slate">
        {!! $page->content !!}
    </div>
</section>
@endif
<!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">About us</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">About us</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">We help brands grow through authentic connections with <span>social influencers</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
                
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- About Us Item Start -->
                    <div class="about-us-item box-bg-shape">
                        <div class="about-item-logo">
                            <img src="images/facebook-text-logo.svg" alt="">
                        </div>
                        <div class="about-item-counter">
                            <h2><span class="counter">5</span>M+</h2>
                            <p>Facebook Followers</p>
                        </div>
                        <div class="about-graph-lines">
                            <hr>
                            <hr>
                        </div>
                        <div class="about-grapg-image">
                            <img src="images/about-grapg-image.svg" alt="">
                        </div>
                        <div class="about-item-info">
                            <h3>People Connected</h3>
                            <p><span class="counter">92.30</span>%</p>
                        </div>
                        <div class="about-social-icon">
                            <a href="contact.html">
                                <img src="images/facebook-logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- About Us Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- About Us Item Start -->
                    <div class="about-us-item box-bg-shape">
                        <div class="about-item-logo">
                            <img src="images/youtube-text-logo.svg" alt="">
                        </div>
                        <div class="about-item-counter">
                            <h2><span class="counter">122</span>k</h2>
                            <p>YouTube Subscribers</p>
                        </div>
                        <div class="about-graph-lines">
                            <hr>
                            <hr>
                        </div>
                        <div class="about-grapg-image">
                            <img src="images/about-grapg-image.svg" alt="">
                        </div>
                        <div class="about-item-info">
                            <h3>People Connected</h3>
                            <p><span class="counter">98.09</span>%</p>
                        </div>
                        <div class="about-social-icon">
                            <a href="contact.html">
                                <img src="images/youtube-logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- About Us Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- About Us Item Start -->
                    <div class="about-us-item box-bg-shape">
                        <div class="about-item-logo">
                            <img src="images/tiktok-text-logo.svg" alt="">
                        </div>
                        <div class="about-item-counter">
                            <h2><span class="counter">10</span>M+</h2>
                            <p>Tik Tok Post Viewer</p>
                        </div>
                        <div class="about-graph-lines">
                            <hr>
                            <hr>
                        </div>
                        <div class="about-grapg-image">
                            <img src="images/about-grapg-image.svg" alt="">
                        </div>
                        <div class="about-item-info">
                            <h3>People Connected</h3>
                            <p><span class="counter">95.05</span>%</p>
                        </div>
                        <div class="about-social-icon">
                            <a href="contact.html">
                                <img src="images/tiktok-logo.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- About Us Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p>Join us and connect brands with voices that truly - <a href="contact.html">influence audiences.</a></p>
                        <ul>
                            <li>4.9/5</li>
                            <li><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li>Over 4200 Reviews</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Aproach Section Start -->
    <div class="our-approach bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Approach Content Start -->
                    <div class="approach-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our approach</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Turning influence meaning <span>into brand growth</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We specialize in pairing your brand with credible, influential creators who align with your values and speak authentically to your audience.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Approach Image Start -->
                        <div class="approach-image">
                            <figure class="image-anime reveal">
                                <img src="images/approach-image.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Approach Image End -->
                    </div>
                    <!-- Approach Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Mission Vision List Start -->
                    <div class="mission-vision-lists">
                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item box-bg-shape wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-mission.svg" alt="">
                            </div>
                            <div class="mission-vision-content">
                                <h3>Our mission</h3>
                                <p>Our influencer network is built on authenticity, creativity, and impact collaborate with trusted creators.</p>
                            </div>
                            <div class="mission-vision-item-list">
                                <ul>
                                    <li>Partner with influencers who truly align with your brand</li>
                                    <li>Leverage real-time data to make smarter.</li>
                                </ul>
                            </div>
                            <div class="readmore-btn">
                                <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item box-bg-shape wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-vision.svg" alt="">
                            </div>
                            <div class="mission-vision-content">
                                <h3>Our vision</h3>
                                <p>Our influencer network is built on authenticity, creativity, and impact collaborate with trusted creators.</p>
                            </div>
                            <div class="mission-vision-item-list">
                                <ul>
                                    <li>Partner with influencers who truly align with your brand</li>
                                    <li>Leverage real-time data to make smarter.</li>
                                </ul>
                            </div>
                            <div class="readmore-btn">
                                <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->
                    </div>
                    <!-- Mission Vision List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Aproach Section End -->

    <!-- What We Do Section Start -->
    <div class="what-we-do">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">What We Do</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Connecting brands with trusted <span>social voices</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.4s">
                        <p>We specialize in pairing your brand with credible, influential creators who align with your values and speak authentically to your audience. By leveraging their trust and reach, we help you drive engagement.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- What We Do Image Start -->
                    <div class="what-we-do-image">
                        <figure class="image-anime reveal">
                            <img src="images/what-we-do-image.jpg" alt="">
                        </figure>
                    </div>
                    <!-- What We Do Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- What We Do Body Start -->
                        <div class="what-we-do-body">
                            <!-- What Do Body Item Start -->
                            <div class="what-do-body-item wow fadeInUp" data-wow-delay="0.2s">
                                <h3>Influencer Discovery & Vetting</h3>
                                <p>We collaborate with a network of expert influencers who are trusted voices in their industries</p>
                            </div>
                            <!-- What Do Body Item End -->

                            <!-- What Do Counter Box Start -->
                            <div class="what-do-counter-box">
                                <!-- What Do Counter Item Start -->
                                <div class="what-do-counter-item">
                                    <h2><span class="counter">80</span>+</h2>
                                    <p>Countries Covered</p>
                                </div>
                                <!-- What Do Counter Item End -->

                                <!-- What Do Counter Item Start -->
                                <div class="what-do-counter-item">
                                    <h2><span class="counter">6.2</span>x</h2>
                                    <p>Avg. ROI Campaign</p>
                                </div>
                                <!-- What Do Counter Item End -->
                            </div>
                            <!-- What Do Counter Box End -->
                        </div>
                        <!-- What We Do Body End -->

                        <!-- What Do Info Box Start -->
                        <div class="what-do-info-box box-bg-shape wow fadeInUp" data-wow-delay="0.4s">
                            <div class="what-do-info-content">
                                <h3>Influencer Outreach & Negotiation</h3>
                                <p>We identify and connect you with the most relevant influencers who align with your brand's values, audience & goals. Each creator is carefully vetted based on engagement rates content quality.</p>
                            </div>
                            <div class="what-do-info-list">
                                <ul>
                                    <li>Brand Partnerships</li>
                                    <li>Campaigns</li>
                                </ul>
                            </div>
                            <div class="readmore-btn">
                                <a href="contact.html">
                                    <img src="images/arrow-white.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- What Do Info Box End -->
                    </div>
                    <!-- What We Do Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video-box bg-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <!-- Intro Video Start -->
                    <div class="intro-video wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Intro Image Start -->
                        <div class="intro-video-image">
                            <figure class="image-anime">
                                <img src="images/intro-video-image.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Intro Image End -->

                        <!-- Video Play Button Start -->
                        <div class="video-play-button bg-effect">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Intro Video End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- Trusted Voices Section Start -->
    <div class="trusted-voices">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Trusted Voice Images Start -->
                    <div class="trusted-voice-images">
                        <!-- Trusted Voice Image Box Start -->
                        <div class="trusted-voice-img-box-1">
                            <!-- Trusted Voice Counter Start -->
                            <div class="trusted-voice-counter-item">
                                <h2><span class="counter">60</span>%</h2>
                                <p>Top Satisfied Client</p>
                            </div>
                            <!-- Trusted Voice Counter End -->

                            <!-- Trusted Voice Image Start -->
                            <div class="trusted-voice-img">
                                <figure class="image-anime reveal">
                                    <img src="images/trusted-voice-img-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Trusted Voice Image End -->
                        </div>
                        <!-- Trusted Voice Image Box End -->

                        <!-- Trusted Voice Image Box Start -->
                        <div class="trusted-voice-img-box-2">
                            <!-- Trusted Voice Image Start -->
                            <div class="trusted-voice-img">
                                <figure class="image-anime reveal">
                                    <img src="images/trusted-voice-img-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Trusted Voice Image End -->

                            <!-- Trusted Voice Counter Start -->
                            <div class="trusted-voice-counter-item">
                                <h2><span class="counter">162</span>+</h2>
                                <p>Top Satisfied Client</p>
                            </div>
                            <!-- Trusted Voice Counter End -->
                        </div>
                        <!-- Trusted Voice Image Box End -->
                    </div>
                    <!-- Trusted Voice Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Trusted Voice Content Start -->
                    <div class="trusted-voice-contnet">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Trusted Voices</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Drive engagement through <span>trusted influence</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Our influencer network is built on authenticity, creativity, and impact collaborate with trusted creators.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Trusted Voice Body Start -->
                        <div class="trusted-voice-body wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Trusted Voice Body Item Start -->
                            <div class="trusted-voice-body-item">
                                <div class="icon-box">
                                    <img src="images/icon-trusted-voice-body-1.svg" alt="">
                                </div>

                                <div class="trusted-voice-body-content">
                                    <h3>Authentic Connections</h3>
                                    <p>We collaborate with a network of expert influencers who are.</p>
                                </div>
                            </div>
                            <!-- Trusted Voice Body Item End -->

                            <!-- Trusted Voice Body Item Start -->
                            <div class="trusted-voice-body-item">
                                <div class="icon-box">
                                    <img src="images/icon-trusted-voice-body-2.svg" alt="">
                                </div>

                                <div class="trusted-voice-body-content">
                                    <h3>Strategic Partnerships</h3>
                                    <p>We collaborate with a network of expert influencers who are.</p>
                                </div>
                            </div>
                            <!-- Trusted Voice Body Item End -->
                        </div>
                        <!-- Trusted Voice Body End -->

                        <!-- Trusted Voice Footer Start -->
                        <div class="trusted-voice-footer wow fadeInUp" data-wow-delay="0.8s">
                            <a href="testimonials.html" class="btn-default">View All Review</a>
                        </div>
                        <!-- Trusted Voice Footer End -->
                    </div>
                    <!-- Trusted Voice Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Trusted Voices Section End -->

    <!-- Influencer Network Section Start -->
    <div class="influencer-network bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Influencer Network Content Start -->
                    <div class="influencer-network-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Influencer Network</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Authentic voices, trusted <span>by leading brands</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Our influencer network is built on authenticity, creativity, and impact collaborate with trusted creators.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Influencer Network List Start -->
                        <div class="influencer-network-list wow fadeInUp" data-wow-delay="0.6s">
                            <ul>
                                <li>Verified Global Database</li>
                                <li>Niche-Specific Creator</li>
                                <li>Data-Driven Performance</li>
                                <li>AI-Powered Discovery Tools</li>
                            </ul>
                        </div>
                        <!-- Influencer Network List End -->

                        <!-- Influencer Network Body Start -->
                        <div class="influencer-network-body wow fadeInUp" data-wow-delay="0.8s">
                            <!-- Influencer Network Image Start -->
                            <div class="network-body-image box-bg-shape">
                                <figure class="image-anime">
                                    <img src="images/network-body-image.jpg" alt="">
                                </figure>

                                <div class="readmore-btn">
                                    <a href="contact.html">
                                        <img src="images/arrow-white.svg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Influencer Network Image End -->

                            <!-- Network Body Counter Box Start -->
                            <div class="network-body-counter-box">
                                <div class="icon-box">
                                    <img src="images/icon-network-body.svg" alt="">
                                </div>
                                <div class="network-body-item-content">
                                    <h2><span class="counter">95</span>%</h2>
                                    <p>Customer Satisfaction Rate</p>
                                </div>
                            </div>
                            <!-- Network Body Counter Box End -->
                        </div>
                        <!-- Influencer Network Body End -->
                    </div>
                    <!-- Influencer Network Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Influencer Network Slider Start -->
                    <div class="influencer-network-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Influencer Network Slide Start -->
                                <div class="swiper-slide">
                                    <div class="influencer-network-image">
                                        <figure>
                                            <img src="images/influencer-network-img-1.png" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Influencer Network Slide End -->

                                <!-- Influencer Network Slide Start -->
                                <div class="swiper-slide">
                                    <div class="influencer-network-image">
                                        <figure>
                                            <img src="images/influencer-network-img-2.png" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Influencer Network Slide End -->

                                <!-- Influencer Network Slide Start -->
                                <div class="swiper-slide">
                                    <div class="influencer-network-image">
                                        <figure>
                                            <img src="images/influencer-network-img-3.png" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Influencer Network Slide End -->
                            </div>
                            <div class="influencer-network-pagination"></div>
                        </div>
                    </div>
                    <!-- Influencer Network Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Influencer Network Section End -->

    <!-- Results Stats Section Start -->
    <div class="result-stats">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Results Stats Contnet Start -->
                    <div class="result-stats-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">results & stats</h3>
                            <h2 class="wow fadeInUp" data-cursor="-opaque" data-wow-delay="0.2s">Influencer marketing stats <span>prove our impact</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Results Stats Image Start -->
                        <div class="result-stats-image">
                            <figure class="image-anime reveal">
                                <img src="images/result-stats-image.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Results Stats Image End -->
                    </div>
                    <!-- Results Stats Contnet End -->
                </div>

                <div class="col-lg-6">
                    <!-- Results Stats List Start -->
                    <div class="result-stats-list">
                        <!-- Results Stats Item Start -->
                        <div class="result-stats-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-result-stats-1.svg" alt="">
                            </div>
                            <div class="result-stats-item-content">
                                <h3>Targeted Influencer Campaigns</h3>
                                <p> We design campaigns that connect your brand with the right influencers to reach your ideal audience and drive meaningful results.</p>
                            </div>
                        </div>
                        <!-- Results Stats Item End -->

                        <!-- Results Stats Item Start -->
                        <div class="result-stats-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-result-stats-2.svg" alt="">
                            </div>
                            <div class="result-stats-item-content">
                                <h3>Performance-Driven Strategies</h3>
                                <p> We design campaigns that connect your brand with the right influencers to reach your ideal audience and drive meaningful results.</p>
                            </div>
                        </div>
                        <!-- Results Stats Item End -->

                        <!-- Results Stats Item Start -->
                        <div class="result-stats-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-result-stats-3.svg" alt="">
                            </div>
                            <div class="result-stats-item-content">
                                <h3>Meaningful Brand Engagement</h3>
                                <p> We design campaigns that connect your brand with the right influencers to reach your ideal audience and drive meaningful results.</p>
                            </div>
                        </div>
                        <!-- Results Stats Item End -->
                    </div>
                    <!-- Results Stats List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Results Stats Section End -->

    <!-- Proven Approach Section Start -->
    <div class="proven-approach bg-section dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Proven Approach</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Authentic influencer market that drives results</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Proven Approach Item Start -->
                    <div class="proven-approach-item wow fadeInUp">
                        <div class="proven-approach-item-title">
                            <h3>Content Collaboration</h3>
                        </div>
                        <div class="icon-box">
                            <img src="images/icon-proven-approach-1.svg" alt="">
                        </div>
                        <div class="proven-approach-item-counter">
                            <h2><span class="counter">99</span>+</h2>
                        </div>
                    </div>
                    <!-- Proven Approach Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Proven Approach Item Start -->
                    <div class="proven-approach-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="proven-approach-item-title">
                            <h3>Authentic Connections</h3>
                        </div>
                        <div class="icon-box">
                            <img src="images/icon-proven-approach-2.svg" alt="">
                        </div>
                        <div class="proven-approach-item-counter">
                            <h2><span class="counter">35</span>+</h2>
                        </div>
                    </div>
                    <!-- Proven Approach Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Proven Approach Item Start -->
                    <div class="proven-approach-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="proven-approach-item-title">
                            <h3>Strategic Partnerships</h3>
                        </div>
                        <div class="icon-box">
                            <img src="images/icon-proven-approach-3.svg" alt="">
                        </div>
                        <div class="proven-approach-item-counter">
                            <h2><span class="counter">55</span>+</h2>
                        </div>
                    </div>
                    <!-- Proven Approach Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Proven Approach Item Start -->
                    <div class="proven-approach-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="proven-approach-item-title">
                            <h3>Influencer Campaigns</h3>
                        </div>
                        <div class="icon-box">
                            <img src="images/icon-proven-approach-4.svg" alt="">
                        </div>
                        <div class="proven-approach-item-counter">
                            <h2><span class="counter">60</span>+</h2>
                        </div>
                    </div>
                    <!-- Proven Approach Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                        <p>Let's make something great work together. <a href="contact.html">Get Free Quote</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Proven Approach Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Our Influencer</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Meet the influencers behind <span>your growth</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp">
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-1.jpg" alt="">
                                </figure>
                            </a>
                            <div class="team-content">
                                <h3><a href="team-single.html">Brooklyn Simmons</a></h3>
                                <p>Head of Influencer</p>
                            </div>
                        </div>
                        <div class="team-counter-list">
                            <div class="team-counter-item">
                                <h3><span class="counter">85</span>K</h3>
                                <p>Followers</p>
                            </div>
                            <div class="team-counter-item">
                                <h3><span class="counter">20</span>K</h3>
                                <p>Following</p>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-2.jpg" alt="">
                                </figure>
                            </a>
                            <div class="team-content">
                                <h3><a href="team-single.html">Theresa Webb</a></h3>
                                <p>Campaign Manager</p>
                            </div>
                        </div>
                        <div class="team-counter-list">
                            <div class="team-counter-item">
                                <h3><span class="counter">10</span>K</h3>
                                <p>Followers</p>
                            </div>
                            <div class="team-counter-item">
                                <h3><span class="counter">12</span>K</h3>
                                <p>Following</p>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-3.jpg" alt="">
                                </figure>
                            </a>
                            <div class="team-content">
                                <h3><a href="team-single.html">Darrell Steward</a></h3>
                                <p>Influencer Coordinator</p>
                            </div>
                        </div>
                        <div class="team-counter-list">
                            <div class="team-counter-item">
                                <h3><span class="counter">1</span>M</h3>
                                <p>Followers</p>
                            </div>
                            <div class="team-counter-item">
                                <h3><span class="counter">100</span>K</h3>
                                <p>Following</p>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-4.jpg" alt="">
                                </figure>
                            </a>
                            <div class="team-content">
                                <h3><a href="team-single.html">Eleanor Pena</a></h3>
                                <p>Campaign Manager</p>
                            </div>
                        </div>
                        <div class="team-counter-list">
                            <div class="team-counter-item">
                                <h3><span class="counter">2</span>M</h3>
                                <p>Followers</p>
                            </div>
                            <div class="team-counter-item">
                                <h3><span class="counter">20</span>K</h3>
                                <p>Following</p>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-lg-12 order-4">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.8s">
                        <p>Meet the Creators Behind the Campaign Magic. <a href="team.html">See All Influencers</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- Our Faqs Section Start -->
    <div class="our-faqs bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Faq Image Start -->
                    <div class="faq-image wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Faq Image Start -->
                        <div class="faq-img">
                            <figure class="image-anime">
                                <img src="images/faq-image.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Faq Image End -->

                        <!-- Faq CTA Box Start -->
                        <div class="faq-cta-box">
                            <div class="icon-box">
                                <img src="images/icon-headphone.svg" alt="">
                            </div>
                            <div class="faq-cta-content">
                                <h3>Have Any Question?</h3>
                                <p><a href="tel:+132465789">+(132) 465 789</a></p>
                            </div>
                        </div>
                        <!-- Faq CTA Box End -->
                    </div>
                    <!-- Faq Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Faqs Content Start -->
                    <div class="faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">FAQ's</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Your questions, <span>our answer</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        1. What is influencer marketing?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We run campaigns on Instagram, YouTube, TikTok, Facebook, Twitter, and LinkedIn — depending on your goals and audience.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        2. What platforms do you support?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We run campaigns on Instagram, YouTube, TikTok, Facebook, Twitter, and LinkedIn — depending on your goals and audience.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        3. How do you measure campaign success?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We run campaigns on Instagram, YouTube, TikTok, Facebook, Twitter, and LinkedIn — depending on your goals and audience.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        4. Can I review content before it goes live?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We run campaigns on Instagram, YouTube, TikTok, Facebook, Twitter, and LinkedIn — depending on your goals and audience.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Faqs Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->

    <!-- Our Scrolling Ticker Start -->
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="images/asterisk-icon.svg" alt="">Real Results</span>
                <span><img src="images/asterisk-icon.svg" alt="">Brand Growth</span>
                <span><img src="images/asterisk-icon.svg" alt="">Social Buzz</span>
                <span><img src="images/asterisk-icon.svg" alt="">Real Results</span>
                <span><img src="images/asterisk-icon.svg" alt="">Brand Growth</span>
                <span><img src="images/asterisk-icon.svg" alt="">Social Buzz</span>
                <span><img src="images/asterisk-icon.svg" alt="">Real Results</span>
                <span><img src="images/asterisk-icon.svg" alt="">Brand Growth</span>
                <span><img src="images/asterisk-icon.svg" alt="">Social Buzz</span>
                <span><img src="images/asterisk-icon.svg" alt="">Real Results</span>
                <span><img src="images/asterisk-icon.svg" alt="">Brand Growth</span>
                <span><img src="images/asterisk-icon.svg" alt="">Social Buzz</span>
            </div>

            <div class="scrolling-content">
                <span><img src="images/asterisk-icon.svg" alt="">Real Results</span>
                <span><img src="images/asterisk-icon.svg" alt="">Brand Growth</span>
                <span><img src="images/asterisk-icon.svg" alt="">Social Buzz</span>
                <span><img src="images/asterisk-icon.svg" alt="">Real Results</span>
                <span><img src="images/asterisk-icon.svg" alt="">Brand Growth</span>
                <span><img src="images/asterisk-icon.svg" alt="">Social Buzz</span>
                <span><img src="images/asterisk-icon.svg" alt="">Real Results</span>
                <span><img src="images/asterisk-icon.svg" alt="">Brand Growth</span>
                <span><img src="images/asterisk-icon.svg" alt="">Social Buzz</span>
                <span><img src="images/asterisk-icon.svg" alt="">Real Results</span>
                <span><img src="images/asterisk-icon.svg" alt="">Brand Growth</span>
                <span><img src="images/asterisk-icon.svg" alt="">Social Buzz</span>
            </div>
        </div>
        <!-- Scrolling Ticker End -->
    </div>
    <!-- Our Scrolling Ticker End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <!-- Testimonials Content Box Start -->
                    <div class="testimonials-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Testimonials</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">What our clients say about our work</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We let our results speak through the voices of our clients. From startups to global brands, our partners share how our influencer marketing strategies helped them grow.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Button Start -->
                        <div class="testimonial-btn wow fadeInUp" data-wow-delay="0.6s">
                            <a href="testimonials.html" class="btn-default">view all reviews</a>
                        </div>
                        <!-- Testimonial Button End -->
                    </div>
                    <!-- Testimonial Content Box End -->
                </div>

                <div class="col-lg-5 col-md-6">
                    <!-- Testimonial Image Start -->
                    <div class="testimonial-image wow fadeInUp" data-wow-delay="0.2s">
                        <figure>
                            <img src="images/testimonial-image.png" alt="">
                        </figure>
                    </div>
                    <!-- Testimonial Image End -->
                </div>

                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-content">
                                            <h3>“Our campaign reached over 2 million people in just 10 days! The team made influencer collaboration effortless and results-driven Working with this platform helped us grow brand awareness and sales faster paid ad strategy final reporting, everything was seamless we'll definitely partner again!”</h3>
                                        </div>
                                        <div class="author-content">
                                            <h3>Samantha Lee</h3>
                                            <p>Head of Influencer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                                
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-content">
                                            <h3>“Our campaign reached over 3 million people in just 10 days! The team made influencer collaboration effortless and results-driven Working with this platform helped us grow brand awareness and sales faster paid ad strategy final reporting, everything was seamless we'll definitely partner again!”</h3>
                                        </div>
                                        <div class="author-content">
                                            <h3>Theresa Webb</h3>
                                            <p>Senior Influencer Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-content">
                                            <h3>“Our campaign reached over 4 million people in just 10 days! The team made influencer collaboration effortless and results-driven Working with this platform helped us grow brand awareness and sales faster paid ad strategy final reporting, everything was seamless we'll definitely partner again!”</h3>
                                        </div>
                                        <div class="author-content">
                                            <h3>Darrell Steward</h3>
                                            <p>Influencer Coordinator</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->
@endsection
