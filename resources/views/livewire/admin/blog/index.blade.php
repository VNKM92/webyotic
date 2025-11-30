@extends('layouts.admin-new')

@section('title', 'Blog Posts')

@section('content')
<div class="space-y-6">
    <!-- Session Messages -->
    @if (session('message'))
    <div class="bg-green-50 border border-green-200 rounded-lg p-4 text-green-800">
        {{ session('message') }}
    </div>
    @endif

    <!-- Header with Actions -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Blog Posts</h2>
            <p class="text-gray-600 text-sm mt-1">Manage and create your blog posts</p>
        </div>
        <a href="{{ route('admin.blogs.create') }}" class="inline-flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>New Post</span>
        </a>
    </div>

    <!-- Filters and Search -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Search -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Search Posts</label>
                <input type="text" wire:model.live="search" placeholder="Search by title or content..." 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Filter by Status -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select wire:model.live="filterStatus" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">All Posts</option>
                    <option value="1">Published</option>
                    <option value="0">Draft</option>
                </select>
            </div>

            <!-- Per Page -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Per Page</label>
                <select wire:model.live="perPage" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Posts Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Title</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Author</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Status</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Date</th>
                        <th class="px-6 py-4 text-right text-sm font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                    <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.blogs.edit', $post->id) }}" class="text-blue-600 hover:text-blue-800 font-medium truncate max-w-xs block">
                                {{ $post->title }}
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-2">
                                <img src="https://ui-avatars.com/api/?name={{ $post->user->name }}&background=random" alt="avatar" class="w-8 h-8 rounded-full">
                                <span class="text-gray-700">{{ $post->user->name ?? 'N/A' }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <button wire:click="togglePublish({{ $post->id }})" class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium transition {{ $post->is_published ? 'bg-green-100 text-green-800 hover:bg-green-200' : 'bg-yellow-100 text-yellow-800 hover:bg-yellow-200' }}">
                                @if ($post->is_published)
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Published
                                @else
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                    </svg>
                                    Draft
                                @endif
                            </button>
                        </td>
                        <td class="px-6 py-4 text-gray-600 text-sm">
                            {{ $post->created_at->format('M d, Y') }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end space-x-2">
                                <a href="{{ route('admin.blogs.edit', $post->id) }}" class="inline-flex items-center space-x-1 px-3 py-1 text-sm bg-blue-100 text-blue-700 rounded hover:bg-blue-200 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    <span>Edit</span>
                                </a>
                                <button wire:click="confirmDelete({{ $post->id }})" class="inline-flex items-center space-x-1 px-3 py-1 text-sm bg-red-100 text-red-700 rounded hover:bg-red-200 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    <span>Delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Delete Confirmation Modal -->
                    @if ($deleteConfirm === $post->id)
                    <tr class="bg-red-50 border-b border-red-200">
                        <td colspan="5" class="px-6 py-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4v.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-red-800 font-medium">Are you sure you want to delete this post?</span>
                                </div>
                                <div class="flex space-x-2">
                                    <button wire:click="delete({{ $post->id }})" class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700 transition">
                                        Confirm Delete
                                    </button>
                                    <button wire:click="$set('deleteConfirm', null)" class="px-3 py-1 bg-gray-300 text-gray-700 text-sm rounded hover:bg-gray-400 transition">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center">
                            <div class="space-y-3">
                                <svg class="w-16 h-16 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v11m-5-5l-1.414 1.414M12 12l1.414-1.414M9 16l1.414-1.414M15 12l1.414 1.414"></path>
                                </svg>
                                <p class="text-gray-600 font-medium">No posts found</p>
                                <p class="text-gray-500 text-sm">Get started by creating your first post</p>
                                <a href="{{ route('admin.blogs.create') }}" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                    Create Post
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-gray-50 border-t border-gray-200 px-6 py-4">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
@foreach($posts as $post)
<tr>
<td class="px-6 py-4">{{ $post->title }}</td>
<td class="px-6 py-4">{{ $post->user->name ?? '—' }}</td>
<td class="px-6 py-4 text-center">{{ $post->is_published ? 'Yes' : 'No' }}</td>
<td class="px-6 py-4 flex space-x-2 justify-center">
<a href="{{ route('admin.blogs.edit', $post->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded">Edit</a>
<button wire:click="delete({{ $post->id }})" class="px-3 py-1 bg-red-600 text-white rounded">Delete</button>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>


<div class="mt-4">{{ $posts->links() }}</div>
</div>