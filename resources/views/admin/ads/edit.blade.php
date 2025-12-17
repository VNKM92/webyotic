@extends('layouts.admin')

@section('header')
    Edit Ad
@endsection

@section('content')
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-6">
            <form action="{{ route('admin.ads.update', $ad->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ad Name</label>
                        <input type="text" name="name" value="{{ $ad->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Location</label>
                        <select name="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            <option value="header_top" {{ $ad->location == 'header_top' ? 'selected' : '' }}>Header Top</option>
                            <option value="sidebar" {{ $ad->location == 'sidebar' ? 'selected' : '' }}>Sidebar</option>
                            <option value="footer_top" {{ $ad->location == 'footer_top' ? 'selected' : '' }}>Footer Top</option>
                            <option value="post_top" {{ $ad->location == 'post_top' ? 'selected' : '' }}>Post Top (Below Title)</option>
                            <option value="post_middle" {{ $ad->location == 'post_middle' ? 'selected' : '' }}>Post Middle</option>
                            <option value="post_bottom" {{ $ad->location == 'post_bottom' ? 'selected' : '' }}>Post Bottom</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ad Code</label>
                        <textarea name="code" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm font-mono" required>{{ $ad->code }}</textarea>
                    </div>

                    <div class="flex items-center">
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" value="1" {{ $ad->is_active ? 'checked' : '' }} class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label class="ml-2 block text-sm text-gray-900">Active</label>
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">Update Ad</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
