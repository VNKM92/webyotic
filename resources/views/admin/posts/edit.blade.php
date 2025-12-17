@extends('admin.layouts.app')

@section('content')
<div class="bg-white shadow rounded p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Post</h1>

    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
            <select name="category_id" id="category_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="">None</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
            <textarea name="body" id="body" rows="10" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ $post->body }}</textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>

@endsection