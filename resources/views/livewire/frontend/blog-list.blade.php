<div class="space-y-8">
    <!-- Header Section -->
    <div class="text-center max-w-3xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Blog</h2>
        <p class="text-xl text-gray-600">Discover insights, tips, and stories from our team</p>
    </div>

    <!-- Search Bar -->
    <div class="max-w-md mx-auto">
        <div class="relative">
            <input type="text" wire:model.live="search" placeholder="Search posts..." 
                class="w-full px-4 py-3 pl-10 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition">
            <svg class="absolute left-3 top-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
    </div>

    <!-- Posts Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($posts as $post)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
            <!-- Featured Image -->
            <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 relative overflow-hidden">
                @if ($post->featured_image)
                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                @else
                    <div class="w-full h-full flex items-center justify-center">
                        <svg class="w-16 h-16 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                @endif
            </div>

            <!-- Content -->
            <div class="p-6 space-y-4">
                <!-- Category Badge -->
                <div class="flex items-center space-x-2">
                    <span class="inline-block px-3 py-1 text-xs font-semibold text-blue-600 bg-blue-100 rounded-full">Blog Post</span>
                    <span class="text-gray-500 text-sm">{{ $post->created_at->format('M d, Y') }}</span>
                </div>

                <!-- Title -->
                <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors line-clamp-2">
                    {{ $post->title }}
                </h3>

                <!-- Excerpt -->
                <p class="text-gray-600 text-sm line-clamp-3">
                    {{ $post->excerpt ?: Str::limit($post->content, 150) }}
                </p>

                <!-- Author -->
                <div class="flex items-center space-x-3 pt-4 border-t border-gray-100">
                    <img src="https://ui-avatars.com/api/?name={{ $post->user->name }}&background=random" alt="{{ $post->user->name }}" class="w-8 h-8 rounded-full">
                    <span class="text-sm text-gray-700 font-medium">{{ $post->user->name }}</span>
                </div>

                <!-- Read More Button -->
                <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center space-x-2 text-blue-600 hover:text-blue-800 font-semibold mt-4 group/link">
                    <span>Read More</span>
                    <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
        @empty
        <div class="col-span-full py-16 text-center">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v11m-5-5l-1.414 1.414M12 12l1.414-1.414M9 16l1.414-1.414M15 12l1.414 1.414"></path>
            </svg>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">No posts found</h3>
            <p class="text-gray-600">Try adjusting your search or check back later for new content.</p>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if ($posts->hasPages())
    <div class="flex justify-center">
        {{ $posts->links() }}
    </div>
    @endif
</div>
