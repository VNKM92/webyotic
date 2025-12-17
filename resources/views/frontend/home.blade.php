@extends('frontend.layouts.app')

@section('content')
<!-- Hero Section (Slider) -->
<section class="relative bg-white dark:bg-gray-900 overflow-hidden">
    <div class="absolute inset-0 z-0">
         <!-- Abstract background shape -->
        <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-sky-100 blur-3xl opacity-50"></div>
        <div class="absolute top-1/2 left-0 w-72 h-72 rounded-full bg-orange-100 blur-3xl opacity-50"></div>
    </div>
    
    <div class="relative z-10 max-w-screen-xl px-4 py-20 mx-auto lg:py-32 lg:px-6 flex flex-col-reverse lg:flex-row items-center gap-12">
        <div class="w-full lg:w-1/2 text-center lg:text-left">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-900 md:text-5xl lg:text-6xl dark:text-white">
                Boost Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-500 to-sky-600">Online Presence</span> with Expert SEO
            </h1>
            <p class="mb-8 text-lg font-normal text-slate-500 lg:text-xl sm:px-16 lg:px-0 dark:text-gray-400">
                Unlock your business potential with data-driven strategies. We help you rank higher, drive traffic, and convert leads into loyal customers.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center lg:justify-start sm:space-y-0 sm:space-x-4">
                <a href="{{ route('contact') }}" class="inline-flex justify-center items-center py-3 px-8 text-base font-medium text-center text-white rounded-full bg-gradient-to-r from-sky-500 to-sky-600 hover:from-sky-600 hover:to-sky-700 focus:ring-4 focus:ring-sky-300 shadow-lg hover:shadow-sky-500/30 transition-all transform hover:-translate-y-1">
                    Get Started
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="{{ route('services') }}" class="inline-flex justify-center items-center py-3 px-8 text-base font-medium text-center text-slate-900 rounded-full border border-slate-300 hover:bg-slate-100 focus:ring-4 focus:ring-slate-100 transition-all">
                    View Services
                </a>
            </div>
        </div>
        <div class="w-full lg:w-1/2">
             <div class="relative mx-auto w-full max-w-lg lg:max-w-full">
                <!-- Simple CSS Slider/Carousel Placeholder -->
                <div class="relative overflow-hidden rounded-2xl shadow-2xl bg-sky-50 aspect-video flex items-center justify-center group">
                    <div class="absolute inset-0 bg-gradient-to-tr from-sky-500/10 to-orange-500/10 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop" alt="SEO Analysis" class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-105">
                    
                    <!-- Floating Card Element -->
                    <div class="absolute bottom-6 left-6 z-20 bg-white/90 backdrop-blur p-4 rounded-xl shadow-lg max-w-xs animate-bounce" style="animation-duration: 3s;">
                        <div class="flex items-center space-x-3">
                            <div class="p-2 bg-green-100 rounded-lg text-green-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-semibold uppercase">Traffic Growth</p>
                                <p class="text-lg font-bold text-slate-800">+127%</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</section>

<!-- SEO Cards Section -->
<section class="bg-slate-50 dark:bg-gray-800 py-20">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-slate-900 dark:text-white">Why Choose Webyotic?</h2>
            <p class="font-light text-slate-500 sm:text-xl dark:text-gray-400">We leverage cutting-edge tools and proven methodologies to deliver measurable results.</p>
        </div>
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Card 1 -->
            <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 border border-slate-100 group">
                <div class="flex justify-center items-center mb-4 w-14 h-14 rounded-full bg-sky-100 lg:h-16 lg:w-16 group-hover:bg-sky-500 transition-colors duration-300">
                    <svg class="w-6 h-6 text-sky-600 lg:w-8 lg:h-8 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 20 20"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/></svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white text-slate-800">Keyword Strategy</h3>
                <p class="text-slate-500 dark:text-gray-400 text-sm leading-relaxed">We identify high-value keywords that drive targeted traffic to your site.</p>
            </div>
            <!-- Card 2 -->
            <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 border border-slate-100 group">
                <div class="flex justify-center items-center mb-4 w-14 h-14 rounded-full bg-orange-100 lg:h-16 lg:w-16 group-hover:bg-orange-500 transition-colors duration-300">
                    <svg class="w-6 h-6 text-orange-600 lg:w-8 lg:h-8 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white text-slate-800">On-Page SEO</h3>
                <p class="text-slate-500 dark:text-gray-400 text-sm leading-relaxed">Optimizing content and HTML source code to improve search visibility.</p>
            </div>
            <!-- Card 3 -->
            <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 border border-slate-100 group">
                <div class="flex justify-center items-center mb-4 w-14 h-14 rounded-full bg-sky-100 lg:h-16 lg:w-16 group-hover:bg-sky-500 transition-colors duration-300">
                    <svg class="w-6 h-6 text-sky-600 lg:w-8 lg:h-8 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white text-slate-800">Link Building</h3>
                <p class="text-slate-500 dark:text-gray-400 text-sm leading-relaxed">Acquiring high-quality backlinks to boost domain authority and trust.</p>
            </div>
            <!-- Card 4 -->
            <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 border border-slate-100 group">
                <div class="flex justify-center items-center mb-4 w-14 h-14 rounded-full bg-orange-100 lg:h-16 lg:w-16 group-hover:bg-orange-500 transition-colors duration-300">
                    <svg class="w-6 h-6 text-orange-600 lg:w-8 lg:h-8 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white text-slate-800">Analytics & Reporting</h3>
                <p class="text-slate-500 dark:text-gray-400 text-sm leading-relaxed">Detailed insights and reports to track performance and ROI.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="bg-white dark:bg-gray-900 py-20 relative overflow-hidden">
     <!-- Background decoration -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20 pointer-events-none">
        <div class="absolute -top-20 -left-20 w-80 h-80 rounded-full bg-sky-200 blur-3xl"></div>
        <div class="absolute top-1/2 right-0 w-60 h-60 rounded-full bg-orange-200 blur-3xl"></div>
    </div>

    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6 relative z-10">
        <div class="mx-auto max-w-screen-sm">
            <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-slate-900 dark:text-white">Trusted by Clients</h2>
            <p class="mb-8 font-light text-slate-500 lg:mb-16 sm:text-xl dark:text-gray-400">See what our partners have to say about our work.</p>
        </div> 
        
        <!-- Slider Implementation using horizontal scroll snap -->
        <div class="flex overflow-x-auto snap-x snap-mandatory pb-8 gap-6 no-scrollbar" style="-ms-overflow-style: none; scrollbar-width: none;">
            <!-- Testimonial 1 -->
            <div class="snap-center shrink-0 w-full md:w-[600px] bg-slate-50 p-8 rounded-2xl shadow-sm border border-slate-100 mx-auto">
                <div class="flex items-center mb-6 justify-center">
                    <img class="w-16 h-16 rounded-full border-4 border-white shadow-md" src="https://i.pravatar.cc/150?img=32" alt="profile picture">
                </div>
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-slate-300 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 20L14.017 18C14.017 16.054 15.192 13.554 17.426 11.226C18.57 10.034 19.546 9.432 20.354 9.42C21.162 9.432 21.922 9.872 22.634 10.74C23.346 11.608 23.702 12.636 23.702 13.824C23.702 15.012 23.324 16.126 22.568 17.166C21.812 18.206 20.658 19.15 19.106 20H14.017ZM0.721998 20L0.721998 18C0.721998 16.054 1.896 13.554 4.13 11.226C5.274 10.034 6.25 9.432 7.058 9.42C7.866 9.432 8.626 9.872 9.338 10.74C10.05 11.608 10.406 12.636 10.406 13.824C10.406 15.012 10.028 16.126 9.272 17.166C8.516 18.206 7.362 19.15 5.81 20H0.721998Z" fill="currentColor"/>
                    </svg> 
                    <blockquote>
                        <p class="text-xl font-medium text-slate-900 dark:text-white">"Webyotic transformed our organic search traffic. We saw a 200% increase in leads within just 3 months. Highly recommended!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3">
                        <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                            <div class="pr-3 font-medium text-slate-900 dark:text-white">Sarah Johnson</div>
                            <div class="pl-3 text-sm font-light text-slate-500 dark:text-gray-400">CEO at TechStart</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
             <!-- Testimonial 2 -->
             <div class="snap-center shrink-0 w-full md:w-[600px] bg-slate-50 p-8 rounded-2xl shadow-sm border border-slate-100 mx-auto">
                <div class="flex items-center mb-6 justify-center">
                    <img class="w-16 h-16 rounded-full border-4 border-white shadow-md" src="https://i.pravatar.cc/150?img=11" alt="profile picture">
                </div>
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-slate-300 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 20L14.017 18C14.017 16.054 15.192 13.554 17.426 11.226C18.57 10.034 19.546 9.432 20.354 9.42C21.162 9.432 21.922 9.872 22.634 10.74C23.346 11.608 23.702 12.636 23.702 13.824C23.702 15.012 23.324 16.126 22.568 17.166C21.812 18.206 20.658 19.15 19.106 20H14.017ZM0.721998 20L0.721998 18C0.721998 16.054 1.896 13.554 4.13 11.226C5.274 10.034 6.25 9.432 7.058 9.42C7.866 9.432 8.626 9.872 9.338 10.74C10.05 11.608 10.406 12.636 10.406 13.824C10.406 15.012 10.028 16.126 9.272 17.166C8.516 18.206 7.362 19.15 5.81 20H0.721998Z" fill="currentColor"/>
                    </svg> 
                    <blockquote>
                        <p class="text-xl font-medium text-slate-900 dark:text-white">"The team is professional, knowledgeable, and easy to work with. Their strategies are spot on."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3">
                        <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                            <div class="pr-3 font-medium text-slate-900 dark:text-white">Mark Davis</div>
                            <div class="pl-3 text-sm font-light text-slate-500 dark:text-gray-400">Marketing Director</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
             <!-- Testimonial 3 -->
             <div class="snap-center shrink-0 w-full md:w-[600px] bg-slate-50 p-8 rounded-2xl shadow-sm border border-slate-100 mx-auto">
                <div class="flex items-center mb-6 justify-center">
                    <img class="w-16 h-16 rounded-full border-4 border-white shadow-md" src="https://i.pravatar.cc/150?img=5" alt="profile picture">
                </div>
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-slate-300 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 20L14.017 18C14.017 16.054 15.192 13.554 17.426 11.226C18.57 10.034 19.546 9.432 20.354 9.42C21.162 9.432 21.922 9.872 22.634 10.74C23.346 11.608 23.702 12.636 23.702 13.824C23.702 15.012 23.324 16.126 22.568 17.166C21.812 18.206 20.658 19.15 19.106 20H14.017ZM0.721998 20L0.721998 18C0.721998 16.054 1.896 13.554 4.13 11.226C5.274 10.034 6.25 9.432 7.058 9.42C7.866 9.432 8.626 9.872 9.338 10.74C10.05 11.608 10.406 12.636 10.406 13.824C10.406 15.012 10.028 16.126 9.272 17.166C8.516 18.206 7.362 19.15 5.81 20H0.721998Z" fill="currentColor"/>
                    </svg> 
                    <blockquote>
                        <p class="text-xl font-medium text-slate-900 dark:text-white">"Incredible results and fantastic support. They really care about their clients' success."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3">
                        <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                            <div class="pr-3 font-medium text-slate-900 dark:text-white">Emily Chen</div>
                            <div class="pl-3 text-sm font-light text-slate-500 dark:text-gray-400">Founder, StyleCo</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
        <p class="mt-4 text-xs text-slate-400">Swipe to see more</p>
    </div>
</section>

<!-- Pricing Section -->
<section class="bg-slate-50 dark:bg-gray-800 py-20">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-slate-900 dark:text-white">SEO Packages</h2>
            <p class="font-light text-slate-500 sm:text-xl dark:text-gray-400">Choose the perfect plan to grow your business.</p>
        </div>
        <div class="space-y-8 lg:grid lg:grid-cols-3 lg:space-y-0 lg:gap-10">
            <!-- Pricing Card 1 -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-slate-900 bg-white rounded-2xl border border-slate-100 shadow-sm xl:p-8 dark:bg-gray-800 dark:text-white hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <h3 class="mb-4 text-2xl font-semibold">Starter</h3>
                <p class="font-light text-slate-500 sm:text-lg dark:text-gray-400">Best for small businesses.</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">$299</span>
                    <span class="text-slate-500 dark:text-gray-400">/month</span>
                </div>
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>5 Keywords Optimization</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Basic On-Page SEO</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Monthly Reporting</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="text-white bg-slate-900 hover:bg-slate-800 focus:ring-4 focus:ring-slate-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors">Get started</a>
            </div>
            <!-- Pricing Card 2 -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-slate-900 bg-white rounded-2xl border-2 border-sky-500 shadow-xl xl:p-8 dark:bg-gray-800 dark:text-white relative hover:-translate-y-2 transition-all duration-300">
                <div class="absolute top-0 right-0 bg-sky-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">POPULAR</div>
                <h3 class="mb-4 text-2xl font-semibold">Growth</h3>
                <p class="font-light text-slate-500 sm:text-lg dark:text-gray-400">For growing companies.</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">$599</span>
                    <span class="text-slate-500 dark:text-gray-400">/month</span>
                </div>
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>20 Keywords Optimization</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Advanced On-Page & Off-Page</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Content Strategy</span>
                    </li>
                     <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Bi-Weekly Reporting</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="text-white bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:ring-sky-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors shadow-lg shadow-sky-200">Get started</a>
            </div>
            <!-- Pricing Card 3 -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-slate-900 bg-white rounded-2xl border border-slate-100 shadow-sm xl:p-8 dark:bg-gray-800 dark:text-white hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <h3 class="mb-4 text-2xl font-semibold">Enterprise</h3>
                <p class="font-light text-slate-500 sm:text-lg dark:text-gray-400">For large scale operations.</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">$999</span>
                    <span class="text-slate-500 dark:text-gray-400">/month</span>
                </div>
                <ul role="list" class="mb-8 space-y-4 text-left">
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Unlimited Keywords</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Full SEO Suite</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Dedicated Manager</span>
                    </li>
                     <li class="flex items-center space-x-3">
                        <svg class="flex-shrink-0 w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        <span>Custom Reporting</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="text-white bg-slate-900 hover:bg-slate-800 focus:ring-4 focus:ring-slate-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors">Contact Sales</a>
            </div>
        </div>
    </div>
</section>
@endsection
