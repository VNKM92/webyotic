<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">


<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>{{ $seo_title ?? config('app.name', 'Webyotic') }}</title>
    @if(!empty($seo_description))
    <meta name="description" content="{{ $seo_description }}">
    @endif
    @if(!empty($seo_keywords))
    <meta name="keywords" content="{{ $seo_keywords }}">
    @endif
    <link rel="alternate" type="application/rss+xml" title="{{ $seo_title ?? config('app.name', 'Webyotic') }} RSS Feed"
        href="{{ route('feed') }}">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

    <!-- Bootstrap Css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{asset('css/slicknav.min.css')}}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <!-- Font Awesome Icon Css-->
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{asset('css/mousecursor.css')}}">
    <!-- Main Custom Css -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" media="screen">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
 

    <!--For Font icone start  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--For Font icone end  -->
 
</head>

<body>

    <!-- Preloader Start -->
    {{-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
            <h2>Webyotic</h2>
        </div>
    </div> --}}
    <!-- Preloader End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        {{-- <img src="images/logo.svg" alt="Logo"> --}}
                        <h2>Webyotic</h2>
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item "><a class="nav-link" href="{{ route('home') }}">Home</a>
                                    {{-- <ul> submenu
                                        <li class="nav-item"><a class="nav-link" href="index-2.html">Home - Main</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="index-image.html">Home -
                                                Image</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-video.html">Home -
                                                Video</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href=" {{ route('gallery') }}">Gallery</a></li> --}}

                                {{-- <li class="nav-item"><a class="nav-link" href=" {{ route('testimonials') }}">Testimonials</a></li> --}}
 
                                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="service-single.html">Service
                                                Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog
                                                Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team-single.html">Team
                                                Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="pricing.html">Our Pricing</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="testimonials.html">Testimonials</a></li>
                                        <li class="nav-item"><a class="nav-link" href="image-gallery.html">Image
                                                Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="video-gallery.html">Video
                                                Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="faqs.html">FAQs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="{{url('contact') }}" class="btn-default">Get Started Now</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
                    <!-- Main Menu End -->

                    {{-- next --}}

                    {{-- <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-slate-100 rounded-lg bg-slate-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                            <li>
                                <a href="{{ route('home') }}" class="block py-2 px-3 {{ request()->routeIs('home') ? 'text-white bg-sky-600 md:bg-transparent md:text-sky-600' : 'text-slate-900 hover:bg-slate-100 md:hover:bg-transparent md:hover:text-sky-600' }} rounded md:p-0 transition-colors" aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" class="block py-2 px-3 {{ request()->routeIs('about') ? 'text-white bg-sky-600 md:bg-transparent md:text-sky-600' : 'text-slate-900 hover:bg-slate-100 md:hover:bg-transparent md:hover:text-sky-600' }} rounded md:p-0 transition-colors">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}" class="block py-2 px-3 {{ request()->routeIs('services') ? 'text-white bg-sky-600 md:bg-transparent md:text-sky-600' : 'text-slate-900 hover:bg-slate-100 md:hover:bg-transparent md:hover:text-sky-600' }} rounded md:p-0 transition-colors">Services</a>
                            </li>
                            <li>
                                <a href="{{ route('gallery') }}" class="block py-2 px-3 {{ request()->routeIs('gallery') ? 'text-white bg-sky-600 md:bg-transparent md:text-sky-600' : 'text-slate-900 hover:bg-slate-100 md:hover:bg-transparent md:hover:text-sky-600' }} rounded md:p-0 transition-colors">Gallery</a>
                            </li>
                            <li>
                                <a href="{{ route('testimonials') }}" class="block py-2 px-3 {{ request()->routeIs('testimonials') ? 'text-white bg-sky-600 md:bg-transparent md:text-sky-600' : 'text-slate-900 hover:bg-slate-100 md:hover:bg-transparent md:hover:text-sky-600' }} rounded md:p-0 transition-colors">Testimonials</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}" class="block py-2 px-3 {{ request()->routeIs('blog') ? 'text-white bg-sky-600 md:bg-transparent md:text-sky-600' : 'text-slate-900 hover:bg-slate-100 md:hover:bg-transparent md:hover:text-sky-600' }} rounded md:p-0 transition-colors">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="block py-2 px-3 {{ request()->routeIs('contact') ? 'text-white bg-sky-600 md:bg-transparent md:text-sky-600' : 'text-slate-900 hover:bg-slate-100 md:hover:bg-transparent md:hover:text-sky-600' }} rounded md:p-0 transition-colors">Contact Us</a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>


            
        </div>
    </header>
    <!-- Header End -->
    <!-- Content -->
    <section class="main-content">
        @yield('content')
    </section>

    {!! optional(\App\Models\Ad::where('is_active', true)->where('location', 'footer_top')->first())->code !!}
    <!-- Footer Section Start -->
    <footer class="main-footer bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="images/footer-logo.svg" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>We help brands connect with the right influencers to create authentic, high-impact
                                campaigns that drive engagement social platforms.</p>
                        </div>
                        <!-- About Footer Content End -->

                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <h3>Social Media:</h3>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-8">
                    <!-- Footer Link Box Start -->
                    <div class="footer-link-box">
                        <!-- Footer Links start -->
                        <div class="footer-links">
                            <h3>quick link</h3>
                            <ul>
                                {{-- <li><a href="index-2.html">Home</a></li> --}}
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href=" {{ route('gallery') }}">Gallery</a></li> --}}
                                {{-- <li class="nav-item"><a class="nav-link" href=" {{ route('testimonials') }}">Testimonials</a></li> --}}
                                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links end -->

                        <!-- Footer Links start -->
                        <div class="footer-links">
                            <h3>services</h3>
                            <ul>
                                <li><a href="service-single.html">Influencer Discovery</a></li>
                                <li><a href="service-single.html">Campaign Strategy</a></li>
                                <li><a href="service-single.html">Influencer Outreach</a></li>
                                <li><a href="service-single.html">Content Creation</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links end -->

                        <!-- Footer Links start -->
                        <div class="footer-links">
                            <h3>Quick Contact</h3>
                            <ul>
                                <li><a href="mailto:support@domain.com">support@domain.com</a></li>
                                <li><a href="tel:+132465789">+(132) 465 789</a></li>
                                <li>1029 Brighton Beach Ave, New York Brooklyn, United States</li>
                            </ul>
                        </div>
                        <!-- Footer Links end -->

                        <!-- Footer Newsletter Form Start -->
                        <div class="footer-newsletter-form-box">
                            <div class="footer-newsletter-content">
                                <h3>Subscribe newsletter:</h3>
                                <p>Don't miss out on influencer news and growth hacks.</p>
                            </div>
                            <div class="newsletter-form">
                                <form id="newslettersForm" action="#" method="POST">
                                    <div class="form-group">
                                        <input type="email" name="mail" class="form-control" id="mail"
                                            placeholder="E-mail Address*" required>
                                        <button type="submit" class="btn-default">subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Footer Newsletter Form End -->
                    </div>
                    <!-- Footer Link Box End -->
                </div>
            </div>
        </div>

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2025 All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright Text End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- Footer Section End -->


    <!-- Jquery Library File -->
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap js file -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Validator js file -->
    <script src="{{asset('js/validator.min.js')}}"></script>
    <!-- SlickNav js file -->
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <!-- Swiper js file -->
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <!-- Counter js file -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <!-- Magnific js file -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Parallax js -->
    <script src="{{asset('js/parallaxie.js')}}"></script>
    <!-- MagicCursor js file -->
    <script src="{{asset('js/gsap.min.js')}}"></script>
    <script src="{{asset('js/magiccursor.js')}}"></script>
    <!-- Text Effect js file -->
    <script src="{{asset('js/SplitText.js')}}"></script>
    <script src="{{asset('js/ScrollTrigger.min.js')}}"></script>
    <!-- SmoothScroll -->
    <script src="{{asset('js/SmoothScroll.js')}}"></script>
    <!-- YTPlayer js File -->
    <script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- Wow js file -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- Main Custom js file -->
    <script src="{{asset('js/function.js')}}"></script>
</body>

</html>