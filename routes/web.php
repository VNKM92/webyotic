<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\Admin\AdController as AdminAdController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Frontend\SitemapController;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogShow'])->name('blog.show');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/sitemap.xml', [SitemapController::class, 'sitemap'])->name('sitemap');
Route::get('/feed', [SitemapController::class, 'rss'])->name('feed');
Route::get('/rss.xml', [SitemapController::class, 'rss'])->name('rss');

// Auth Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Pages Resource
    Route::resource('pages', AdminPageController::class);
    
    // Services Resource
    Route::resource('services', AdminServiceController::class);
    
    // Projects Resource
    Route::resource('projects', AdminProjectController::class);
    
    // Testimonials Resource
    Route::resource('testimonials', AdminTestimonialController::class);
    
    // Ads Resource
    Route::resource('ads', AdminAdController::class);
    
    // Settings Resource (Custom routes mostly)
    Route::get('settings', [AdminSettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [AdminSettingController::class, 'update'])->name('settings.update');
    
    // Posts Resource (Blog)
    Route::resource('posts', AdminPostController::class);
});
