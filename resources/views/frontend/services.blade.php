@extends('frontend.layouts.app')

@section('content')
{{-- @if(isset($page) && !empty($page->content))
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 max-w-screen-xl prose prose-slate">
        {!! $page->content !!}
    </div>
@endif --}}


<!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Our services</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our services</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Services Section Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Services Item Start -->
                    <div class="service-item box-bg-shape wow fadeInUp">
                        <div class="icon-box">
                            <img src="images/icon-service-1.svg" alt="">
                        </div>
                        <div class="service-item-title">
                            <h3><a href="service-single.html">Influencer Discovery</a></h3>
                        </div>
                        <div class="service-item-content">
                            <p>Customized campaign strategies built around your goals.</p>
                        </div>
                        <div class="readmore-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                    <!-- Services Item End -->
                </div>
                    
                <div class="col-lg-4 col-md-6">
                    <!-- Services Item Start -->
                    <div class="service-item box-bg-shape wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="images/icon-service-2.svg" alt="">
                        </div>
                        <div class="service-item-title">
                            <h3><a href="service-single.html">Campaign Strategy</a></h3>
                        </div>
                        <div class="service-item-content">
                            <p>Customized campaign strategies built around your goals.</p>
                        </div>
                        <div class="readmore-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                    <!-- Services Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Services Item Start -->
                    <div class="service-item box-bg-shape wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="images/icon-service-3.svg" alt="">
                        </div>
                        <div class="service-item-title">
                            <h3><a href="service-single.html">Influencer Outreach</a></h3>
                        </div>
                        <div class="service-item-content">
                            <p>Customized campaign strategies built around your goals.</p>
                        </div>
                        <div class="readmore-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                    <!-- Services Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Services Item Start -->
                    <div class="service-item box-bg-shape wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="images/icon-service-3.svg" alt="">
                        </div>
                        <div class="service-item-title">
                            <h3><a href="service-single.html">Content Creation</a></h3>
                        </div>
                        <div class="service-item-content">
                            <p>Customized campaign strategies built around your goals.</p>
                        </div>
                        <div class="readmore-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                    <!-- Services Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Services Item Start -->
                    <div class="service-item box-bg-shape wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <img src="images/icon-service-5.svg" alt="">
                        </div>
                        <div class="service-item-title">
                            <h3><a href="service-single.html">Influencer Network</a></h3>
                        </div>
                        <div class="service-item-content">
                            <p>Customized campaign strategies built around your goals.</p>
                        </div>
                        <div class="readmore-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                    <!-- Services Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Services Item Start -->
                    <div class="service-item box-bg-shape wow fadeInUp" data-wow-delay="1s">
                        <div class="icon-box">
                            <img src="images/icon-service-6.svg" alt="">
                        </div>
                        <div class="service-item-title">
                            <h3><a href="service-single.html">Audience Growth</a></h3>
                        </div>
                        <div class="service-item-content">
                            <p>Customized campaign strategies built around your goals.</p>
                        </div>
                        <div class="readmore-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                    <!-- Services Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Services Section End -->

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
