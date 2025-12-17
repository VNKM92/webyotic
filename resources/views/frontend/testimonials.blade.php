@extends('frontend.layouts.app')

@section('content')
<!-- Testimonials Hero Section -->
<section class="relative bg-slate-900 overflow-hidden py-24 lg:py-32">
    <div class="absolute inset-0 z-0">
        <!-- Abstract background -->
        <div class="absolute top-0 left-0 w-full h-full bg-[url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-10"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-900/90 to-slate-900"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-green-500/20 text-green-300 text-sm font-semibold mb-6 border border-green-500/30 animate-fade-in-up">Client Stories</span>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s;">
            Trusted by <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-400">Industry Leaders</span>
        </h1>
        <p class="text-xl text-slate-300 mb-10 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
            Don't just take our word for it. Hear what our clients have to say about their experience working with Webyotic.
        </p>
    </div>
</section>

<!-- Testimonials Grid -->
<section class="py-20 bg-slate-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-slate-100 dark:border-gray-700 hover:shadow-xl transition-all duration-300 relative group">
                <!-- Quote Icon -->
                <div class="absolute top-6 right-6 text-slate-100 dark:text-gray-700 group-hover:text-green-100 dark:group-hover:text-green-900 transition-colors">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.896 14.321 16.062 14.929 15.5C15.537 14.938 16.279 14.656 17.155 14.656L17.155 11.084C16.491 11.084 15.897 10.938 15.373 10.646C14.849 10.354 14.437 9.947 14.137 9.426C13.837 8.904 13.687 8.27 13.687 7.524L13.687 3L21 3L21 12.5C21 14.912 20.219 16.906 18.657 18.482C17.095 20.058 15.549 20.898 14.017 21ZM4.017 21L4.017 18C4.017 16.896 4.321 16.062 4.929 15.5C5.537 14.938 6.279 14.656 7.155 14.656L7.155 11.084C6.491 11.084 5.897 10.938 5.373 10.646C4.849 10.354 4.437 9.947 4.137 9.426C3.837 8.904 3.687 8.27 3.687 7.524L3.687 3L11 3L11 12.5C11 14.912 10.219 16.906 8.657 18.482C7.095 20.058 5.549 20.898 4.017 21Z"/></svg>
                </div>

                <!-- Stars -->
                <div class="flex mb-6 text-yellow-400">
                    @for($i = 0; $i < 5; $i++)
                        @if($i < $testimonial['rating'])
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @else
                            <svg class="w-5 h-5 text-gray-300 dark:text-gray-600" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endif
                    @endfor
                </div>

                <p class="text-slate-600 dark:text-gray-300 mb-8 leading-relaxed italic relative z-10">
                    "{{ $testimonial['content'] }}"
                </p>

                <div class="flex items-center">
                    <img loading="lazy" src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full object-cover mr-4 ring-2 ring-green-500/50">
                    <div>
                        <h4 class="font-bold text-slate-900 dark:text-white">{{ $testimonial['name'] }}</h4>
                        <p class="text-xs text-slate-500 dark:text-gray-400 uppercase tracking-wide">{{ $testimonial['position'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-green-600">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
            <div class="p-4">
                <div class="text-4xl font-bold mb-2">98%</div>
                <div class="text-green-100 text-sm">Client Satisfaction</div>
            </div>
            <div class="p-4">
                <div class="text-4xl font-bold mb-2">200+</div>
                <div class="text-green-100 text-sm">Projects Completed</div>
            </div>
            <div class="p-4">
                <div class="text-4xl font-bold mb-2">50+</div>
                <div class="text-green-100 text-sm">Happy Clients</div>
            </div>
            <div class="p-4">
                <div class="text-4xl font-bold mb-2">24/7</div>
                <div class="text-green-100 text-sm">Support Available</div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">Ready to share your success story?</h2>
        <p class="text-slate-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto">Join our list of satisfied clients and let's build something great together.</p>
        <div class="flex justify-center space-x-4">
            <a href="{{ route('contact') }}" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-bold rounded-full transition-colors shadow-lg">Get in Touch</a>
            <a href="{{ route('gallery') }}" class="px-8 py-3 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 font-bold rounded-full transition-colors dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:bg-gray-600">View Our Work</a>
        </div>
    </div>
</section>
@endsection
