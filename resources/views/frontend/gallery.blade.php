@extends('frontend.layouts.app')

@section('content')
<!-- Gallery Hero Section -->
<section class="relative bg-slate-900 overflow-hidden py-24 lg:py-32">
    <div class="absolute inset-0 z-0">
        <!-- Abstract background -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-purple-900/20 to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-pink-500/10 rounded-full blur-3xl"></div>
        <div class="absolute top-20 right-20 w-72 h-72 bg-sky-500/10 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-3 rounded-full bg-pink-500/20 text-pink-300 text-sm font-semibold mb-6 border border-pink-500/30 animate-fade-in-up">Our Portfolio</span>
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s;">
            Showcasing Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-purple-400">Creative Works</span>
        </h1>
        <p class="text-xl text-slate-300 mb-10 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
            From complex enterprise systems to innovative mobile apps, explore how we bring digital visions to life.
        </p>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-20 bg-white dark:bg-gray-900">
    <div class="container mx-auto px-4 max-w-screen-xl">
        
        <!-- Filter Buttons (Optional - Logic would need JS, static for now) -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 rounded-full bg-slate-900 text-white dark:bg-white dark:text-slate-900 font-medium hover:opacity-90 transition-opacity shadow-lg">All Projects</button>
            <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-600 dark:bg-gray-800 dark:text-gray-300 font-medium hover:bg-slate-200 dark:hover:bg-gray-700 transition-colors">Web Apps</button>
            <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-600 dark:bg-gray-800 dark:text-gray-300 font-medium hover:bg-slate-200 dark:hover:bg-gray-700 transition-colors">Mobile Apps</button>
            <button class="px-6 py-2 rounded-full bg-slate-100 text-slate-600 dark:bg-gray-800 dark:text-gray-300 font-medium hover:bg-slate-200 dark:hover:bg-gray-700 transition-colors">Enterprise</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="group relative bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-lg border border-slate-100 dark:border-gray-700 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <!-- Image -->
                <div class="relative h-64 overflow-hidden">
                    <img loading="lazy" src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <span class="text-white font-medium">{{ $project['category'] }}</span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-pink-500 transition-colors">{{ $project['title'] }}</h3>
                    <p class="text-slate-600 dark:text-gray-400 mb-4 line-clamp-3">
                        {{ $project['description'] }}
                    </p>
                    
                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2 mt-4">
                        @foreach($project['tags'] as $tag)
                        <span class="text-xs font-semibold px-2.5 py-0.5 rounded-full bg-sky-100 text-sky-800 dark:bg-sky-900 dark:text-sky-300">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-pink-600 to-purple-600">
    <div class="container mx-auto px-4 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Have a Project in Mind?</h2>
        <p class="text-lg text-pink-100 mb-8 max-w-2xl mx-auto">Let's collaborate to build something amazing that drives real results for your business.</p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-pink-600 font-bold py-3 px-8 rounded-full hover:bg-slate-900 hover:text-white transition-all shadow-lg transform hover:scale-105">Start a Project</a>
    </div>
</section>
@endsection
