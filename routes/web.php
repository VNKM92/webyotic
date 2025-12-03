<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Frontend\HomeSlider;
use App\Http\Livewire\Frontend\HomeBlogList;

require __DIR__.'/auth.php';

Route::get('/', function () {
return view('welcome');
});

Route::middleware(['auth'])->group(function () {
// protected user routes
});


// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



// Admin routes
Route::prefix('admin')->middleware(['auth','admin'])->group(function() {
  Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::get('/', \App\Http\Livewire\Admin\Dashboard::class)->name('admin.dashboard');


    // Blog CRUD via Livewire
    Route::get('/blogs', \App\Http\Livewire\Admin\Blog\Index::class)->name('admin.blogs.index');
    Route::get('/blogs/create', \App\Http\Livewire\Admin\Blog\Create::class)->name('admin.blogs.create');
    Route::get('/blogs/{id}/edit', \App\Http\Livewire\Admin\Blog\Edit::class)->name('admin.blogs.edit');
});


// Public blog routes
Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    $post = App\Models\Post::where('slug', $slug)->where('is_published', true)->firstOrFail();
    return view('blog.show', compact('post'));
})->name('blog.show');
