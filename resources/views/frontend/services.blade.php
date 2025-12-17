@extends('frontend.layouts.app')

@section('content')
<!-- Services Hero Section -->
<section class="relative bg-slate-900 overflow-hidden py-24 lg:py-32">
    <div class="absolute inset-0 z-0">
        <!-- Abstract background -->
        <div class="absolute top-0 left-0 w-full h-full bg-[url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-10"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-900/90 to-slate-900"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-sky-500/20 text-sky-300 text-sm font-semibold mb-6 border border-sky-500/30 animate-fade-in-up">What We Do</span>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s;">
            Comprehensive <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-orange-400">Digital Solutions</span>
        </h1>
        <p class="text-xl text-slate-300 mb-10 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
            From high-ranking SEO strategies to cutting-edge web development, we provide end-to-end services to elevate your brand.
        </p>
    </div>
</section>

<!-- Main Services Grid -->
<section class="py-20 bg-slate-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1: SEO -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-slate-100 dark:border-gray-700 hover:border-sky-500 dark:hover:border-sky-500 transition-all duration-300 group hover:-translate-y-2">
                <div class="w-14 h-14 bg-sky-100 dark:bg-sky-900 rounded-xl flex items-center justify-center mb-6 text-sky-600 dark:text-sky-300 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Search Engine Optimization</h3>
                <p class="text-slate-600 dark:text-gray-400 mb-6">Dominate search results with our data-driven SEO strategies. We optimize your site for visibility, traffic, and conversions.</p>
                <ul class="space-y-2 text-slate-500 dark:text-gray-400 mb-6">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>On-Page & Off-Page SEO</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Keyword Research</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Technical Audits</li>
                </ul>
            </div>

            <!-- Service 2: Web Development -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-slate-100 dark:border-gray-700 hover:border-orange-500 dark:hover:border-orange-500 transition-all duration-300 group hover:-translate-y-2">
                <div class="w-14 h-14 bg-orange-100 dark:bg-orange-900 rounded-xl flex items-center justify-center mb-6 text-orange-600 dark:text-orange-300 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Web Development</h3>
                <p class="text-slate-600 dark:text-gray-400 mb-6">Custom websites built for performance, security, and scale. We bring your vision to life with clean, robust code.</p>
                <ul class="space-y-2 text-slate-500 dark:text-gray-400 mb-6">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Full-Stack Development</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>E-commerce Solutions</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>CMS Integration</li>
                </ul>
            </div>

            <!-- Service 3: Content Marketing -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-slate-100 dark:border-gray-700 hover:border-sky-500 dark:hover:border-sky-500 transition-all duration-300 group hover:-translate-y-2">
                <div class="w-14 h-14 bg-sky-100 dark:bg-sky-900 rounded-xl flex items-center justify-center mb-6 text-sky-600 dark:text-sky-300 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Content Marketing</h3>
                <p class="text-slate-600 dark:text-gray-400 mb-6">Engage your audience with compelling content that tells your story and establishes your authority in the industry.</p>
                <ul class="space-y-2 text-slate-500 dark:text-gray-400 mb-6">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Blog Writing</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Copywriting</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Social Media Content</li>
                </ul>
            </div>

            <!-- Service 4: UI/UX Design -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-slate-100 dark:border-gray-700 hover:border-orange-500 dark:hover:border-orange-500 transition-all duration-300 group hover:-translate-y-2">
                <div class="w-14 h-14 bg-orange-100 dark:bg-orange-900 rounded-xl flex items-center justify-center mb-6 text-orange-600 dark:text-orange-300 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">UI/UX Design</h3>
                <p class="text-slate-600 dark:text-gray-400 mb-6">Create intuitive and beautiful interfaces that users love. We focus on user journeys and aesthetic appeal.</p>
                <ul class="space-y-2 text-slate-500 dark:text-gray-400 mb-6">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Wireframing & Prototyping</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Mobile App Design</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Brand Identity</li>
                </ul>
            </div>

            <!-- Service 5: Social Media Marketing -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-slate-100 dark:border-gray-700 hover:border-sky-500 dark:hover:border-sky-500 transition-all duration-300 group hover:-translate-y-2">
                <div class="w-14 h-14 bg-sky-100 dark:bg-sky-900 rounded-xl flex items-center justify-center mb-6 text-sky-600 dark:text-sky-300 group-hover:bg-sky-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Social Media Marketing</h3>
                <p class="text-slate-600 dark:text-gray-400 mb-6">Build a loyal community around your brand. We manage your social presence and run targeted ad campaigns.</p>
                <ul class="space-y-2 text-slate-500 dark:text-gray-400 mb-6">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Strategy & Planning</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Community Management</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Paid Advertising</li>
                </ul>
            </div>

            <!-- Service 6: Analytics & Reporting -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg border border-slate-100 dark:border-gray-700 hover:border-orange-500 dark:hover:border-orange-500 transition-all duration-300 group hover:-translate-y-2">
                <div class="w-14 h-14 bg-orange-100 dark:bg-orange-900 rounded-xl flex items-center justify-center mb-6 text-orange-600 dark:text-orange-300 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Analytics & Reporting</h3>
                <p class="text-slate-600 dark:text-gray-400 mb-6">Make informed decisions with deep data insights. We track, analyze, and report on key performance metrics.</p>
                <ul class="space-y-2 text-slate-500 dark:text-gray-400 mb-6">
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Custom Dashboards</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Conversion Tracking</li>
                    <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>ROI Analysis</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-6">Why Choose Webyotic?</h2>
                <p class="text-lg text-slate-600 dark:text-gray-300 mb-8">
                    We don't just deliver services; we deliver results. Our approach is rooted in understanding your unique business challenges and crafting bespoke solutions.
                </p>
                
                <div class="space-y-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 rounded-md bg-sky-500 text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Fast Turnaround</h3>
                            <p class="mt-1 text-slate-500 dark:text-gray-400">We value your time. Our agile processes ensure quick delivery without compromising quality.</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 rounded-md bg-orange-500 text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Affordable Pricing</h3>
                            <p class="mt-1 text-slate-500 dark:text-gray-400">Top-tier services shouldn't break the bank. We offer competitive pricing for startups and enterprises alike.</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 rounded-md bg-sky-500 text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">24/7 Support</h3>
                            <p class="mt-1 text-slate-500 dark:text-gray-400">We are always here for you. Our support team is ready to assist you whenever you need us.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Team meeting" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-sky-900/10"></div>
                </div>
                <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-dots-pattern opacity-20"></div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-slate-900">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Need a Custom Solution?</h2>
        <p class="text-lg text-slate-400 mb-8 max-w-2xl mx-auto">Contact us today to discuss your project requirements and get a free quote.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-gradient-to-r from-sky-500 to-orange-500 text-white font-bold py-3 px-8 rounded-full hover:from-sky-600 hover:to-orange-600 transition-all shadow-lg transform hover:scale-105">Get in Touch</a>
    </div>
</section>
@endsection
