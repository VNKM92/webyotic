@extends('layouts.admin')

@section('content')
<div class="bg-white shadow rounded p-4">
    <h1 class="text-2xl font-bold mb-4">Create Post</h1>

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
            <select name="category_id" id="category_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="">None</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
            <textarea name="body" id="body" rows="10" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                <input type="text" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div>
                <label for="focus_keyword" class="block text-sm font-medium text-gray-700">Focus Keyword</label>
                <input type="text" name="focus_keyword" id="focus_keyword" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>
        </div>

        <div class="mb-4">
            <label for="seo_title" class="block text-sm font-medium text-gray-700">SEO Title</label>
            <input type="text" name="seo_title" id="seo_title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="seo_description" class="block text-sm font-medium text-gray-700">SEO Description</label>
            <textarea name="seo_description" id="seo_description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
        </div>
        <div class="mb-4">
            <label for="seo_keywords" class="block text-sm font-medium text-gray-700">SEO Keywords (comma-separated)</label>
            <input type="text" name="seo_keywords" id="seo_keywords" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>

@endsection
