<x-app-layout>
    <x-slot name="header">

<div class="space-y-8">
    <!-- Welcome Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 rounded-lg p-8 text-white shadow-lg">
        <h2 class="text-3xl font-bold mb-2">Welcome back, {{ auth()->user()->name }}! 👋</h2>
        <p class="text-blue-100">Here's what's happening with your content today.</p>
    </div>

    <!-- Statistics Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Total Posts Card -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500 hover:shadow-lg transition-shadow">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-600 text-sm font-semibold mb-1">Total Posts</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalPosts }}</p>
                </div>
                <div class="bg-blue-100 rounded-lg p-3">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v11m-5-5l-1.414 1.414M12 12l1.414-1.414M9 16l1.414-1.414M15 12l1.414 1.414"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 mt-4">
                <span class="text-green-600 font-semibold">+2</span> this week
            </p>
        </div>

        <!-- Published Posts Card -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500 hover:shadow-lg transition-shadow">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-600 text-sm font-semibold mb-1">Published</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $publishedPosts }}</p>
                </div>
                <div class="bg-green-100 rounded-lg p-3">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 mt-4">
                <span class="text-green-600 font-semibold">{{ round(($publishedPosts / max($totalPosts, 1)) * 100) }}%</span> of total
            </p>
        </div>

        <!-- Total Users Card -->
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500 hover:shadow-lg transition-shadow">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-gray-600 text-sm font-semibold mb-1">Total Users</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalUsers }}</p>
                </div>
                <div class="bg-purple-100 rounded-lg p-3">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.856-1.487M15 10a3 3 0 11-6 0 3 3 0 016 0zM15 20H9m6 0h6m-6-4h6"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 mt-4">
                <span class="text-green-600 font-semibold">Active</span> today
            </p>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="{{ route('admin.blogs.create') }}" class="group flex items-center space-x-4 p-4 border-2 border-gray-200 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition-all">
                <div class="bg-blue-100 rounded-lg p-3 group-hover:bg-blue-500 transition-colors">
                    <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-gray-900 group-hover:text-blue-600">Create New Post</p>
                    <p class="text-sm text-gray-600">Write and publish a new blog post</p>
                </div>
            </a>

            <a href="{{ route('admin.blogs.index') }}" class="group flex items-center space-x-4 p-4 border-2 border-gray-200 rounded-lg hover:border-green-500 hover:bg-green-50 transition-all">
                <div class="bg-green-100 rounded-lg p-3 group-hover:bg-green-500 transition-colors">
                    <svg class="w-6 h-6 text-green-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-gray-900 group-hover:text-green-600">Manage Posts</p>
                    <p class="text-sm text-gray-600">View and edit all blog posts</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Recent Posts -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Recent Posts</h3>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="border-b border-gray-200">
                    <tr>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Title</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Author</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Status</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse (\App\Models\Post::latest()->limit(5)->get() as $post)
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                            <td class="py-3 px-4">
                                <a href="{{ route('admin.blogs.edit', $post->id) }}" class="text-blue-600 hover:text-blue-800 font-medium truncate">
                                    {{ $post->title }}
                                </a>
                            </td>
                            <td class="py-3 px-4">{{ $post->user->name ?? 'N/A' }}</td>
                            <td class="py-3 px-4">
                                @if ($post->is_published)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Published
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Draft
                                    </span>
                                @endif
                            </td>
                            <td class="py-3 px-4 text-gray-600">{{ $post->created_at->format('M d, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-8 px-4 text-center text-gray-500">
                                <p class="mb-2">No posts yet</p>
                                <a href="{{ route('admin.blogs.create') }}" class="text-blue-600 hover:text-blue-800 text-sm">Create your first post</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</x-slot>
</x-app-layout>