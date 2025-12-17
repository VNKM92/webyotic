@extends('frontend.layouts.app')

@section('content')
@if(!empty($page?->content))
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 max-w-screen-xl prose prose-slate">
        {!! $page->content !!}
    </div>
</section>
@endif
<!-- About Hero Section -->
<section class="relative bg-slate-900 overflow-hidden py-24 lg:py-32">
    <div class="absolute inset-0 z-0">
        <!-- Abstract background -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-sky-900/20 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl"></div>
        <div class="absolute top-20 right-20 w-72 h-72 bg-sky-500/10 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-orange-500/20 text-orange-300 text-sm font-semibold mb-6 border border-orange-500/30 animate-fade-in-up">Who We Are</span>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s;">
            Driving Innovation in <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-orange-400">IT & SEO</span>
        </h1>
        <p class="text-xl text-slate-300 mb-10 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
            We are a team of passionate engineers and creative thinkers dedicated to transforming businesses through digital excellence.
        </p>
    </div>
</section>

<!-- Our Story Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Team working" class="w-full h-auto object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                </div>
                <!-- Decorative elements -->
                <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-orange-500 rounded-lg -z-10"></div>
                <div class="absolute -top-6 -left-6 w-24 h-24 bg-sky-500 rounded-lg -z-10"></div>
            </div>
            
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-6">Building the Future of Digital</h2>
                <p class="text-lg text-slate-600 dark:text-gray-300 mb-6 leading-relaxed">
                    Webyotic was born from a shared vision between two innovators: <strong>Vinay</strong>, a Software Engineer with a passion for robust code, and <strong>Shivam</strong>, a creative strategist with an eye for groundbreaking design.
                </p>
                <p class="text-lg text-slate-600 dark:text-gray-300 mb-8 leading-relaxed">
                    Together, we established a premier IT and SEO company that doesn't just build websites, but creates comprehensive digital experiences. Our synergy of technical precision and creative flair allows us to deliver solutions that are not only functional but also visionary.
                </p>
                
                <div class="grid grid-cols-2 gap-6">
                    <div class="p-4 bg-slate-50 dark:bg-gray-800 rounded-xl border-l-4 border-sky-500">
                        <h3 class="text-4xl font-bold text-slate-900 dark:text-white mb-1">500+</h3>
                        <p class="text-sm text-slate-500 dark:text-gray-400">Projects Delivered</p>
                    </div>
                    <div class="p-4 bg-slate-50 dark:bg-gray-800 rounded-xl border-l-4 border-orange-500">
                        <h3 class="text-4xl font-bold text-slate-900 dark:text-white mb-1">98%</h3>
                        <p class="text-sm text-slate-500 dark:text-gray-400">Client Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="py-20 bg-slate-50 dark:bg-gray-800">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="text-center mb-16">
            <span class="text-sky-600 font-bold tracking-wider uppercase text-sm">Our Leadership</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mt-2">Meet the Minds Behind Webyotic</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-4xl mx-auto">
            <!-- Vinay -->
            <div class="bg-white dark:bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="relative h-80 overflow-hidden">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Vinay" class="w-full h-full object-cover object-top transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-80"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Vinay</h3>
                        <p class="text-sky-400 font-medium">Founder & Software Engineer</p>
                    </div>
                </div>
                <div class="p-8">
                    <p class="text-slate-600 dark:text-gray-300 mb-6">
                        As the technical backbone of Webyotic, Vinay brings years of software engineering expertise. He specializes in building scalable architectures and ensuring that every line of code contributes to a seamless user experience.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-slate-400 hover:text-sky-500 transition-colors"><span class="sr-only">LinkedIn</span><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                        <a href="#" class="text-slate-400 hover:text-sky-500 transition-colors"><span class="sr-only">Twitter</span><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                    </div>
                </div>
            </div>

            <!-- Shivam -->
            <div class="bg-white dark:bg-gray-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                <div class="relative h-80 overflow-hidden">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Shivam" class="w-full h-full object-cover object-top transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-80"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Shivam</h3>
                        <p class="text-orange-400 font-medium">Partner & Creative Strategist</p>
                    </div>
                </div>
                <div class="p-8">
                    <p class="text-slate-600 dark:text-gray-300 mb-6">
                        The creative force behind our projects, Shivam brings innovative ideas and strategic vision to the table. His focus is on crafting user-centric designs and marketing strategies that drive real growth for our clients.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-slate-400 hover:text-sky-500 transition-colors"><span class="sr-only">LinkedIn</span><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                        <a href="#" class="text-slate-400 hover:text-sky-500 transition-colors"><span class="sr-only">Twitter</span><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4 max-w-screen-xl text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-16">Our Core Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="p-8 bg-slate-50 dark:bg-gray-800 rounded-2xl border border-slate-100 dark:border-gray-700 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-sky-100 dark:bg-sky-900 rounded-full flex items-center justify-center mx-auto mb-6 text-sky-600 dark:text-sky-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Innovation</h3>
                <p class="text-slate-600 dark:text-gray-400">We constantly push boundaries to find better, faster, and more efficient solutions.</p>
            </div>
            <!-- Value 2 -->
            <div class="p-8 bg-slate-50 dark:bg-gray-800 rounded-2xl border border-slate-100 dark:border-gray-700 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center mx-auto mb-6 text-orange-600 dark:text-orange-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Excellence</h3>
                <p class="text-slate-600 dark:text-gray-400">We don't settle for "good enough." Every project is a testament to our commitment to quality.</p>
            </div>
            <!-- Value 3 -->
            <div class="p-8 bg-slate-50 dark:bg-gray-800 rounded-2xl border border-slate-100 dark:border-gray-700 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-sky-100 dark:bg-sky-900 rounded-full flex items-center justify-center mx-auto mb-6 text-sky-600 dark:text-sky-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Collaboration</h3>
                <p class="text-slate-600 dark:text-gray-400">We work with you, not just for you. Your success is our shared victory.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-sky-600 to-blue-700">
    <div class="container mx-auto px-4 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Business?</h2>
        <p class="text-lg text-sky-100 mb-8 max-w-2xl mx-auto">Join hands with Webyotic and let's build something extraordinary together.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-sky-600 font-bold py-3 px-8 rounded-full hover:bg-orange-500 hover:text-white transition-all shadow-lg transform hover:scale-105">Start Your Project</a>
    </div>
</section>
@endsection
