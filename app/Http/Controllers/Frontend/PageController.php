<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Service;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Post;

class PageController extends Controller
{
    public function about()
    {
        $page = Page::where('template', 'about')->first();
        $seo_title = $page->seo_title ?? null;
        $seo_description = $page->seo_description ?? null;
        $seo_keywords = $page->seo_keywords ?? null;
        return view('frontend.about', compact('page', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function contact()
    {
        $page = Page::where('template', 'contact')->first();
        $seo_title = $page->seo_title ?? null;
        $seo_description = $page->seo_description ?? null;
        $seo_keywords = $page->seo_keywords ?? null;
        return view('frontend.contact', compact('page', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function blog()
    {
        $posts = Post::with(['category', 'user'])->latest()->paginate(10);
        $page = Page::where('template', 'blog')->first();
        $seo_title = $page->seo_title ?? 'Blog';
        $seo_description = $page->seo_description ?? null;
        $seo_keywords = $page->seo_keywords ?? null;
        return view('frontend.blog', compact('posts', 'page', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function blogShow($slug)
    {
        $post = Post::with(['category', 'user'])->where('slug', $slug)->firstOrFail();
        $seo_title = $post->seo_title ?? $post->title;
        $seo_description = $post->seo_description ?? null;
        $seo_keywords = $post->seo_keywords ?? null;
        return view('frontend.blog-details', compact('post', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function services()
    {
        $services = Service::all();
        $page = Page::where('template', 'services')->first();
        $seo_title = $page->seo_title ?? null;
        $seo_description = $page->seo_description ?? null;
        $seo_keywords = $page->seo_keywords ?? null;
        return view('frontend.services', compact('services', 'page', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function gallery()
    {
        $projects = Project::all();
        $page = Page::where('template', 'gallery')->first();
        $seo_title = $page->seo_title ?? null;
        $seo_description = $page->seo_description ?? null;
        $seo_keywords = $page->seo_keywords ?? null;
        return view('frontend.gallery', compact('projects', 'page', 'seo_title', 'seo_description', 'seo_keywords'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::all();
        $page = Page::where('template', 'testimonials')->first();
        $seo_title = $page->seo_title ?? null;
        $seo_description = $page->seo_description ?? null;
        $seo_keywords = $page->seo_keywords ?? null;
        return view('frontend.testimonials', compact('testimonials', 'page', 'seo_title', 'seo_description', 'seo_keywords'));
    }
}
