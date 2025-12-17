<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'home')->first();
        $seo_title = $page->seo_title ?? null;
        $seo_description = $page->seo_description ?? null;
        $seo_keywords = $page->seo_keywords ?? null;
        return view('frontend.home', compact('page', 'seo_title', 'seo_description', 'seo_keywords'));
    }
}
