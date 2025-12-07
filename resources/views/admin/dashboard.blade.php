@extends('admin.layouts.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    
    <div class="bg-white shadow p-6 rounded">
        <h2 class="text-lg font-semibold">Users</h2>
        <p class="text-3xl font-bold">{{ $userCount }}</p>
    </div>

    <div class="bg-white shadow p-6 rounded">
        <h2 class="text-lg font-semibold">Posts</h2>
        <p class="text-3xl font-bold">{{ $postCount }}</p>
    </div>

    <div class="bg-white shadow p-6 rounded">
        <h2 class="text-lg font-semibold">Categories</h2>
        <p class="text-3xl font-bold">{{ $categoryCount }}</p>
    </div>

</div>

@endsection
