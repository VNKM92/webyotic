@extends('layouts.admin')

@section('header')
    Create Ad
@endsection

@section('content')
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-6">
            <form action="{{ route('admin.ads.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ad Name</label>
                        <input type="text" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Location</label>
                        <select name="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            <option value="header_top">Header Top</option>
                            <option value="sidebar">Sidebar</option>
                            <option value="footer_top">Footer Top</option>
                            <option value="post_top">Post Top (Below Title)</option>
                            <option value="post_middle">Post Middle</option>
                            <option value="post_bottom">Post Bottom</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ad Code</label>
                        <textarea name="code" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm font-mono" required placeholder="<script>...</script>"></textarea>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" value="1" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label class="ml-2 block text-sm text-gray-900">Active</label>
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">Create Ad</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
