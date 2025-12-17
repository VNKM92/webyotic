@extends('layouts.admin')

@section('header')
    Create Page
@endsection

@section('content')
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-6">
            <form action="{{ route('admin.pages.store') }}" method="POST" id="page-form">
                @csrf
                
                <div class="grid grid-cols-1 gap-6">
                    <!-- Basic Info -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Page Title</label>
                            <input type="text" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Slug (URL)</label>
                            <input type="text" name="slug" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Leave empty to auto-generate">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Template</label>
                        <select name="template" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            <option value="default">Default</option>
                            <option value="home">Home Page</option>
                            <option value="about">About Us</option>
                            <option value="contact">Contact Us</option>
                            <option value="services">Services</option>
                            <option value="gallery">Gallery</option>
                            <option value="testimonials">Testimonials</option>
                        </select>
                    </div>

                    <!-- Content -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                        <div id="editor-container" style="height: 300px;"></div>
                        <input type="hidden" name="content" id="content-input">
                    </div>

                    <!-- SEO Section -->
                    <div class="border-t pt-6 mt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">SEO Settings</h3>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">SEO Title</label>
                                <input type="text" name="seo_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">SEO Description</label>
                                <textarea name="seo_description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Keywords (Comma separated)</label>
                                    <input type="text" name="seo_keywords" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Focus Keyword</label>
                                    <input type="text" name="focus_keyword" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">Create Page</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow'
    });
    
    document.getElementById('page-form').onsubmit = function() {
        var content = document.querySelector('input[name=content]');
        content.value = quill.root.innerHTML;
    };
</script>
@endpush
