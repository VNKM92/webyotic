@extends('frontend.layouts.app')

@section('content')
<!-- Blog Hero Slider Section -->
<section class="relative bg-slate-900 overflow-hidden h-[400px] flex items-center">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1499750310159-5b600aaf0320?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Blog Background" class="w-full h-full object-cover opacity-30 animate-pulse-slow">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/80 to-transparent"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-2xl animate-fade-in-up">
            <span class="inline-block py-1 px-3 rounded-full bg-sky-500/20 text-sky-300 text-sm font-semibold mb-4 border border-sky-500/30">Latest Insights</span>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                Unlock the Power of <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 to-orange-400">Digital Growth</span>
            </h1>
            <p class="text-lg text-slate-300 mb-8 max-w-lg">
                Stay ahead of the curve with our expert articles on SEO, marketing strategies, and technical innovations.
            </p>
        </div>
    </div>
</section>

<!-- Main Blog Content -->
<section class="py-16 bg-slate-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="grid grid-cols-12 gap-8 lg:gap-12">
            
            <!-- Main Content (9 Columns) -->
            <div class="col-span-12 lg:col-span-9 space-y-12">
                @foreach($posts as $post)
                <article class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-slate-100 dark:border-gray-700 group">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-0">
                        <!-- Image -->
                        <div class="md:col-span-5 relative overflow-hidden h-64 md:h-auto">
                            <img loading="lazy" src="{{ $post->image ?? 'https://images.unsplash.com/photo-1499750310159-5b600aaf0320?auto=format&fit=crop&w=800&q=80' }}" alt="{{ $post->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm text-slate-800 dark:text-white text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                                    {{ optional($post->category)->name ?? 'Uncategorized' }}
                                </span>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="md:col-span-7 p-6 md:p-8 flex flex-col justify-center">
                            <div class="flex items-center text-sm text-slate-500 dark:text-gray-400 mb-3 space-x-4">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1.5 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    {{ $post->created_at?->format('M d, Y') }}
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1.5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                    {{ optional($post->user)->name ?? 'Admin' }}
                                </span>
                            </div>
                            
                            <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-sky-600 transition-colors">
                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                            </h2>
                            
                            <p class="text-slate-600 dark:text-gray-300 mb-6 line-clamp-2">
                                {{ \Illuminate\Support\Str::limit(strip_tags($post->body), 160) }}
                            </p>
                            
                            <div class="flex items-center justify-between mt-auto">
                                <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center font-semibold text-sky-600 dark:text-sky-400 hover:text-sky-700 transition-colors">
                                    Read Article
                                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="flex items-center space-x-2">
                                     <!-- Share placeholder -->
                                     <button class="text-slate-400 hover:text-sky-500 transition-colors" title="Share">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                                     </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
                
                <!-- Pagination Placeholder -->
                <div class="flex justify-center mt-12">
                    {{ $posts->links() }}
                </div>
            </div>
            
            <!-- Sidebar (3 Columns) -->
            <aside class="col-span-12 lg:col-span-3 space-y-8">
                
                <!-- Search Widget -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-gray-700">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4 border-l-4 border-sky-500 pl-3">Search</h3>
                    <form action="#" class="relative">
                        <input type="text" placeholder="Search articles..." class="w-full pl-10 pr-4 py-3 rounded-lg border-slate-200 focus:border-sky-500 focus:ring-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                    </form>
                </div>
                
                <!-- Latest Information (Categories) -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-gray-700">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4 border-l-4 border-orange-500 pl-3">Categories</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="flex items-center justify-between text-slate-600 dark:text-gray-300 hover:text-sky-600 transition-colors group">
                                <span>SEO Strategy</span>
                                <span class="bg-slate-100 dark:bg-gray-700 text-slate-500 text-xs px-2 py-1 rounded-full group-hover:bg-sky-100 group-hover:text-sky-600 transition-colors">12</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between text-slate-600 dark:text-gray-300 hover:text-sky-600 transition-colors group">
                                <span>Content Marketing</span>
                                <span class="bg-slate-100 dark:bg-gray-700 text-slate-500 text-xs px-2 py-1 rounded-full group-hover:bg-sky-100 group-hover:text-sky-600 transition-colors">8</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between text-slate-600 dark:text-gray-300 hover:text-sky-600 transition-colors group">
                                <span>Technical SEO</span>
                                <span class="bg-slate-100 dark:bg-gray-700 text-slate-500 text-xs px-2 py-1 rounded-full group-hover:bg-sky-100 group-hover:text-sky-600 transition-colors">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between text-slate-600 dark:text-gray-300 hover:text-sky-600 transition-colors group">
                                <span>Social Media</span>
                                <span class="bg-slate-100 dark:bg-gray-700 text-slate-500 text-xs px-2 py-1 rounded-full group-hover:bg-sky-100 group-hover:text-sky-600 transition-colors">15</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Recent Posts (Sidebar) -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-gray-700">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4 border-l-4 border-sky-500 pl-3">Recent Posts</h3>
                    <div class="space-y-4">
                        @foreach($posts as $recent)
                        @if($loop->index < 3)
                        <div class="flex space-x-4 group">
                            <div class="flex-shrink-0 w-20 h-20 rounded-lg overflow-hidden">
                                <img loading="lazy" src="{{ $recent->image ?? 'https://images.unsplash.com/photo-1499750310159-5b600aaf0320?auto=format&fit=crop&w=200&q=80' }}" alt="{{ $recent->title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white line-clamp-2 mb-1 group-hover:text-sky-600 transition-colors">
                                    <a href="{{ route('blog.show', $recent->slug) }}">{{ $recent->title }}</a>
                                </h4>
                                <span class="text-xs text-slate-500 dark:text-gray-400">{{ $recent->created_at?->format('M d, Y') }}</span>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                
                <!-- Newsletter/Ad Widget -->
                <div class="bg-gradient-to-br from-sky-500 to-blue-600 p-6 rounded-2xl text-white text-center">
                    <h3 class="text-xl font-bold mb-2">Free SEO Audit</h3>
                    <p class="text-sky-100 text-sm mb-4">Get a comprehensive analysis of your website's performance.</p>
                    <a href="{{ route('contact') }}" class="inline-block bg-white text-sky-600 font-bold py-2 px-6 rounded-full hover:bg-sky-50 transition-colors shadow-lg">Check Now</a>
                </div>

            </aside>
        </div>
    </div>
</section>
@endsection
