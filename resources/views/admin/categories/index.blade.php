@extends('layouts.admin')

@section('content')
<a href="{{ route('admin.categories.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
    + Add New Category
</a>

<div class="bg-white shadow rounded p-4">
    <table class="w-full">
        <tr class="bg-gray-200 text-left">
            <th class="p-2">Name</th>
            <th class="p-2">Slug</th>
            <th class="p-2">Created At</th>
            <th class="p-2">Action</th>
        </tr>

        @foreach ($categories as $category)
        <tr>
            <td class="p-2">{{ $category->name }}</td>
            <td class="p-2">{{ $category->slug }}</td>
            <td class="p-2">{{ $category->created_at->format('d M Y') }}</td>
            <td class="p-2">
                <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button class="text-red-500" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    {{ $categories->links() }}
</div>

@endsection
