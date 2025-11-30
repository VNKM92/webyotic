@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Blog & News</h1>
            <p class="text-xl text-blue-100">Stay updated with our latest articles and insights</p>
        </div>
    </div>

    <!-- Blog Content -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @livewire('frontend.blog-list')
    </div>
</div>
@endsection
