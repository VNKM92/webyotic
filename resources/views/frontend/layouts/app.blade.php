<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Webyotic') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body class="font-sans antialiased text-slate-800 bg-slate-50">
    
    <!-- Navbar -->
    <nav class="bg-white/90 backdrop-blur-md fixed w-full z-50 top-0 start-0 border-b border-slate-100 shadow-sm transition-all duration-300">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-bold whitespace-nowrap text-sky-600">Web<span class="text-orange-500">yotic</span></span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="{{ route('contact') }}" class="text-white bg-gradient-to-r from-sky-500 to-sky-600 hover:from-sky-600 hover:to-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-full text-sm px-6 py-2.5 text-center transition-all transform hover:scale-105 shadow-md hover:shadow-lg">
                    Get Started
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-500 rounded-lg md:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
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
                        <a href="{{ route('blog') }}" class="block py-2 px-3 {{ request()->routeIs('blog') ? 'text-white bg-sky-600 md:bg-transparent md:text-sky-600' : 'text-slate-900 hover:bg-slate-100 md:hover:bg-transparent md:hover:text-sky-600' }} rounded md:p-0 transition-colors">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="block py-2 px-3 {{ request()->routeIs('contact') ? 'text-white bg-sky-600 md:bg-transparent md:text-sky-600' : 'text-slate-900 hover:bg-slate-100 md:hover:bg-transparent md:hover:text-sky-600' }} rounded md:p-0 transition-colors">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="mt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-10 lg:py-16">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0 max-w-sm">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse mb-4">
                        <span class="self-center text-3xl font-bold whitespace-nowrap text-sky-500">Web<span class="text-orange-500">yotic</span></span>
                    </a>
                    <p class="text-slate-400 mb-4">We provide top-notch SEO and web solutions to help your business grow. Our team of experts is dedicated to delivering results.</p>
                    
                    <!-- Social Icons -->
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-slate-400 hover:text-white transition-colors">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors">
                            <span class="sr-only">Twitter</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase tracking-wider">Resources</h2>
                        <ul class="text-slate-400 font-medium space-y-3">
                            <li><a href="{{ route('home') }}" class="hover:text-sky-400 transition-colors">Home</a></li>
                            <li><a href="{{ route('about') }}" class="hover:text-sky-400 transition-colors">About Us</a></li>
                            <li><a href="{{ route('blog') }}" class="hover:text-sky-400 transition-colors">Blog</a></li>
                            <li><a href="{{ route('services') }}" class="hover:text-sky-400 transition-colors">Services</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase tracking-wider">Services</h2>
                        <ul class="text-slate-400 font-medium space-y-3">
                            <li><a href="#" class="hover:text-sky-400 transition-colors">SEO Optimization</a></li>
                            <li><a href="#" class="hover:text-sky-400 transition-colors">Content Marketing</a></li>
                            <li><a href="#" class="hover:text-sky-400 transition-colors">Social Media</a></li>
                            <li><a href="#" class="hover:text-sky-400 transition-colors">PPC Advertising</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase tracking-wider">Contact</h2>
                        <ul class="text-slate-400 font-medium space-y-3">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-orange-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span>123 SEO Street, Digital City, 10001</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <span>info@webyotic.com</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <span>+1 (555) 123-4567</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-slate-800 sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-slate-500 sm:text-center">© 2025 <a href="#" class="hover:underline text-sky-500">Webyotic™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0 space-x-4">
                   <a href="#" class="text-slate-500 hover:text-white text-sm">Privacy Policy</a>
                   <a href="#" class="text-slate-500 hover:text-white text-sm">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script>
        // Simple script for mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
            const menu = document.getElementById('navbar-sticky');
            
            if(toggleBtn && menu) {
                toggleBtn.addEventListener('click', function() {
                    menu.classList.toggle('hidden');
                    const expanded = toggleBtn.getAttribute('aria-expanded') === 'true' || false;
                    toggleBtn.setAttribute('aria-expanded', !expanded);
                });
            }
        });
    </script>
</body>
</html>
