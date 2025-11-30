@extends('layouts.app')

@section('content')
<div class="bg-white">
    <!-- Blog Header -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-4 flex items-center space-x-2">
                <a href="/" class="hover:underline">Home</a>
                <span>/</span>
                <a href="/blog" class="hover:underline">Blog</a>
                <span>/</span>
                <span class="opacity-75">{{ $post->title }}</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $post->title }}</h1>
            <div class="flex items-center space-x-4">
                <img src="https://ui-avatars.com/api/?name={{ $post->user->name }}&background=random" alt="{{ $post->user->name }}" class="w-12 h-12 rounded-full">
                <div>
                    <p class="font-semibold">{{ $post->user->name }}</p>
                    <p class="text-blue-100">{{ $post->created_at->format('F d, Y') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Featured Image -->
        @if ($post->featured_image)
        <div class="mb-8 rounded-lg overflow-hidden">
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-96 object-cover">
        </div>
        @endif

        <!-- Post Content -->
        <div class="prose prose-lg max-w-none mb-12">
            <div class="text-gray-700 leading-relaxed text-lg">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>

        <!-- Post Meta -->
        <div class="border-t border-b border-gray-200 py-6 my-8">
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <p class="text-gray-600 text-sm">Published on</p>
                    <p class="text-lg font-semibold text-gray-900">{{ $post->created_at->format('M d, Y') }}</p>
                </div>
                <div>
                    <p class="text-gray-600 text-sm">Reading time</p>
                    <p class="text-lg font-semibold text-gray-900">{{ ceil(str_word_count($post->content) / 200) }} min</p>
                </div>
                <div>
                    <p class="text-gray-600 text-sm">Status</p>
                    <p class="text-lg font-semibold">
                        @if ($post->is_published)
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-green-600 bg-green-100 rounded-full">Published</span>
                        @else
                            <span class="inline-block px-3 py-1 text-sm font-semibold text-yellow-600 bg-yellow-100 rounded-full">Draft</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <!-- Related Posts -->
        <div class="mt-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Related Posts</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse (\App\Models\Post::where('is_published', true)->where('id', '!=', $post->id)->latest()->limit(2)->get() as $relatedPost)
                <a href="{{ route('blog.show', $relatedPost->slug) }}" class="group block bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow">
                    <h4 class="font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-2 line-clamp-2">
                        {{ $relatedPost->title }}
                    </h4>
                    <p class="text-gray-600 text-sm line-clamp-2 mb-4">{{ $relatedPost->excerpt }}</p>
                    <div class="flex items-center space-x-2 text-blue-600 text-sm font-semibold">
                        <span>Read More</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </div>
                </a>
                @empty
                <p class="col-span-2 text-gray-600">No related posts available.</p>
                @endforelse
            </div>
        </div>

        <!-- Back to Blog -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <a href="/blog" class="inline-flex items-center space-x-2 text-blue-600 hover:text-blue-800 font-semibold group">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span>Back to Blog</span>
            </a>
        </div>
    </div>
</div>
@endsection
