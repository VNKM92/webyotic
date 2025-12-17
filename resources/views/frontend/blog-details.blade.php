@extends('frontend.layouts.app')

@section('content')
<!-- Single Blog Hero Section -->
<div class="relative bg-slate-900 pt-32 pb-20 px-4">
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-full object-cover opacity-20 blur-sm">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
    </div>
    <div class="container mx-auto max-w-screen-xl relative z-10">
        <div class="max-w-4xl">
            <div class="flex flex-wrap gap-3 mb-6">
                <span class="bg-sky-500/20 text-sky-300 border border-sky-500/30 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider">
                    {{ $post->category }}
                </span>
                <span class="bg-slate-700/50 text-slate-300 border border-slate-600/30 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider flex items-center">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    5 min read
                </span>
            </div>
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">
                {{ $post->title }}
            </h1>
            <div class="flex items-center text-slate-300 space-x-6">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center mr-3 text-white font-bold text-lg">
                        {{ substr($post->author, 0, 1) }}
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-white">{{ $post->author }}</p>
                        <p class="text-xs text-slate-400">SEO Specialist</p>
                    </div>
                </div>
                <div class="flex items-center text-sm">
                    <svg class="w-5 h-5 mr-2 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    {{ $post->date }}
                </div>
                <div class="flex items-center text-sm">
                    <svg class="w-5 h-5 mr-2 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                    {{ $post->comments_count }} Comments
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-16 bg-slate-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="grid grid-cols-12 gap-8 lg:gap-12">
            
            <!-- Main Content (9 Columns) -->
            <div class="col-span-12 lg:col-span-9">
                <article class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-slate-100 dark:border-gray-700 overflow-hidden mb-12">
                    <div class="p-8 md:p-12 prose dark:prose-invert max-w-none prose-lg prose-headings:font-bold prose-headings:text-slate-900 dark:prose-headings:text-white prose-a:text-sky-600 hover:prose-a:text-sky-700 prose-img:rounded-xl">
                        {!! $post->content !!}
                    </div>
                    
                    <!-- Tags & Share -->
                    <div class="px-8 md:px-12 py-6 bg-slate-50 dark:bg-gray-700/30 border-t border-slate-100 dark:border-gray-700 flex flex-col md:flex-row items-center justify-between gap-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="text-sm font-semibold text-slate-500 dark:text-gray-400 mr-2">Tags:</span>
                            @foreach($post->tags as $tag)
                            <a href="#" class="text-xs bg-white dark:bg-gray-600 border border-slate-200 dark:border-gray-500 rounded-full px-3 py-1 text-slate-600 dark:text-gray-200 hover:bg-sky-50 hover:text-sky-600 hover:border-sky-200 transition-colors">#{{ $tag }}</a>
                            @endforeach
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="text-sm font-semibold text-slate-500 dark:text-gray-400">Share:</span>
                            <button class="p-2 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></button>
                            <button class="p-2 rounded-full bg-sky-400 text-white hover:bg-sky-500 transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></button>
                            <button class="p-2 rounded-full bg-blue-700 text-white hover:bg-blue-800 transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></button>
                        </div>
                    </div>
                </article>

                <!-- Comments Section -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-slate-100 dark:border-gray-700 p-8">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-8">Comments ({{ $post->comments_count }})</h3>
                    
                    <!-- Comment Form -->
                    <form action="#" class="mb-10">
                        <div class="mb-4">
                            <label for="comment" class="sr-only">Your comment</label>
                            <textarea id="comment" rows="4" class="w-full px-4 py-3 rounded-lg bg-slate-50 border-slate-200 focus:border-sky-500 focus:ring-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400 transition-colors" placeholder="Write a comment..."></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="px-6 py-2.5 bg-sky-600 text-white font-medium rounded-lg hover:bg-sky-700 focus:ring-4 focus:ring-sky-300 dark:focus:ring-sky-900 transition-all transform hover:scale-105">Post Comment</button>
                        </div>
                    </form>
                    
                    <!-- Comment List -->
                    <div class="space-y-8">
                        <div class="flex space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/150?img=32" alt="User avatar">
                            </div>
                            <div class="flex-1">
                                <div class="bg-slate-50 dark:bg-gray-700/50 p-4 rounded-xl rounded-tl-none">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-bold text-slate-900 dark:text-white">Michael Gough</h4>
                                        <span class="text-xs text-slate-500 dark:text-gray-400">Feb 8, 2025</span>
                                    </div>
                                    <p class="text-slate-600 dark:text-gray-300 text-sm">Very insightful article! I particularly agree with the point about voice search optimization. It's definitely the next big thing.</p>
                                </div>
                                <div class="flex items-center mt-2 space-x-4 ml-2">
                                    <button class="text-xs font-semibold text-slate-500 hover:text-sky-600 transition-colors">Reply</button>
                                    <button class="text-xs font-semibold text-slate-500 hover:text-sky-600 transition-colors">Like</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-10 h-10 rounded-full" src="https://i.pravatar.cc/150?img=12" alt="User avatar">
                            </div>
                            <div class="flex-1">
                                <div class="bg-slate-50 dark:bg-gray-700/50 p-4 rounded-xl rounded-tl-none">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-bold text-slate-900 dark:text-white">Jese Leos</h4>
                                        <span class="text-xs text-slate-500 dark:text-gray-400">Feb 7, 2025</span>
                                    </div>
                                    <p class="text-slate-600 dark:text-gray-300 text-sm">Great tips! Could you elaborate more on the Core Web Vitals part? I'm struggling with LCP optimization.</p>
                                </div>
                                <div class="flex items-center mt-2 space-x-4 ml-2">
                                    <button class="text-xs font-semibold text-slate-500 hover:text-sky-600 transition-colors">Reply</button>
                                    <button class="text-xs font-semibold text-slate-500 hover:text-sky-600 transition-colors">Like</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar (3 Columns) - Reused/Simplified -->
            <aside class="col-span-12 lg:col-span-3 space-y-8">
                
                <!-- Search Widget -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-gray-700">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4 border-l-4 border-sky-500 pl-3">Search</h3>
                    <form action="#" class="relative">
                        <input type="text" placeholder="Search..." class="w-full pl-10 pr-4 py-3 rounded-lg border-slate-200 focus:border-sky-500 focus:ring-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                    </form>
                </div>

                <!-- Author Bio -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-gray-700 text-center">
                    <img src="https://i.pravatar.cc/150?img=32" alt="{{ $post->author }}" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-sky-100 dark:border-sky-900">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">{{ $post->author }}</h3>
                    <p class="text-sm text-sky-600 dark:text-sky-400 mb-4">SEO Specialist</p>
                    <p class="text-slate-600 dark:text-gray-300 text-sm mb-4">Passionate about helping businesses grow through organic search strategies and content marketing.</p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="text-slate-400 hover:text-sky-500"><span class="sr-only">Twitter</span><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></a>
                        <a href="#" class="text-slate-400 hover:text-sky-500"><span class="sr-only">LinkedIn</span><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                    </div>
                </div>

                <!-- Latest Info (Categories) -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-sm border border-slate-100 dark:border-gray-700">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4 border-l-4 border-orange-500 pl-3">Categories</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="flex items-center justify-between text-slate-600 dark:text-gray-300 hover:text-sky-600 transition-colors"><span>SEO Strategy</span> <span class="text-xs bg-slate-100 dark:bg-gray-700 px-2 py-1 rounded-full">12</span></a></li>
                        <li><a href="#" class="flex items-center justify-between text-slate-600 dark:text-gray-300 hover:text-sky-600 transition-colors"><span>Content Marketing</span> <span class="text-xs bg-slate-100 dark:bg-gray-700 px-2 py-1 rounded-full">8</span></a></li>
                        <li><a href="#" class="flex items-center justify-between text-slate-600 dark:text-gray-300 hover:text-sky-600 transition-colors"><span>Technical SEO</span> <span class="text-xs bg-slate-100 dark:bg-gray-700 px-2 py-1 rounded-full">5</span></a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
