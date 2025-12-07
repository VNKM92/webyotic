@extends('admin.layouts.app')

@section('content')
<a href="{{ route('admin.posts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
    + Add New Post
</a>

<div class="bg-white shadow rounded p-4">
    <table class="w-full">
        <tr class="bg-gray-200 text-left">
            <th class="p-2">Title</th>
            <th class="p-2">Category</th>
            <th class="p-2">Created At</th>
            <th class="p-2">Action</th>
        </tr>

        @foreach ($posts as $post)
        <tr>
            <td class="p-2">{{ $post->title }}</td>
            <td class="p-2">{{ $post->category->name ?? 'None' }}</td>
            <td class="p-2">{{ $post->created_at->format('d M Y') }}</td>
            <td class="p-2">
                <a href="{{ route('admin.posts.edit', $post->id) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button class="text-red-500" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    {{ $posts->links() }}
</div>

@endsection
