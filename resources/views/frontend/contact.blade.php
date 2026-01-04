@extends('frontend.layouts.app')

@section('content')
{{-- @if(!empty($page?->content))
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 max-w-screen-xl prose prose-slate">
        {!! $page->content !!}
    </div>
</section> --}}
@endif
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Contact us</h1>
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

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Let's Work together</h3>
                            <h2 class="wow fadeInUp" data-cursor="-opaque" data-wow-delay="0.2s">Let's start growing your <span>with influence</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Let's start growing your brand with influence-driven strategies connect, convert, and inspire.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact CTA Item Start -->
                        <div class="contact-cta-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="images/icon-headphone.svg" alt="">
                            </div>
                            <div class="contact-cta-item-content">
                                <p>Call support center 24/7</p>
                                <h3><a href="tel:791241450">+(001) 279 124 1450</a></h3>
                            </div>
                        </div>
                        <!-- Contact CTA Item End -->

                        <!-- Contact Info List Start -->
                        <div class="contact-info-list wow fadeInUp" data-wow-delay="0.8s">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="images/icon-mail-gradient.svg" alt="">
                                </div>
                                <div class="contact-item-content">
                                    <h3>Email</h3>
                                    <p><a href="mailto:support@domain.com">support@domain.com</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="images/icon-location-gradient.svg" alt="">
                                </div>
                                <div class="contact-item-content">
                                    <h3>Location</h3>
                                    <p>New York Brooklyn, UK 0018</p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Info List End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form dark-section">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-cursor="-opaque">Send us a message</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="E-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="3" placeholder="Write message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default btn-highlighted">submit message</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Location</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Find us and connect <span>with confidence</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->
@endsection
