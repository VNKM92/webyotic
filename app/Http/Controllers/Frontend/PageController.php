<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Service;
use App\Models\Project;
use App\Models\Testimonial;

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
        // Dummy data for blog posts
        $posts = [
            [
                'title' => 'The Future of SEO: 5 Trends to Watch in 2025',
                'slug' => 'future-of-seo-2025',
                'excerpt' => 'Discover the emerging trends that will shape the search engine landscape in the coming years, from AI-driven search to voice optimization.',
                'image' => 'https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'author' => 'Sarah Johnson',
                'date' => 'Dec 15, 2024',
                'comments' => 12,
                'category' => 'SEO Strategy'
            ],
            [
                'title' => 'Mastering Content Marketing for B2B Growth',
                'slug' => 'mastering-content-marketing',
                'excerpt' => 'Learn how to create a content strategy that drives leads and conversions for your B2B business with actionable tips and case studies.',
                'image' => 'https://images.unsplash.com/photo-1499750310159-5b600aaf0320?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'author' => 'Mike Chen',
                'date' => 'Dec 10, 2024',
                'comments' => 8,
                'category' => 'Marketing'
            ],
            [
                'title' => 'Technical SEO: A Comprehensive Guide for Developers',
                'slug' => 'technical-seo-guide',
                'excerpt' => 'Dive deep into the technical aspects of SEO, including site speed, mobile optimization, and structured data implementation.',
                'image' => 'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'author' => 'Alex Turner',
                'date' => 'Dec 05, 2024',
                'comments' => 24,
                'category' => 'Technical'
            ],
            [
                'title' => 'Social Media Signals and Search Rankings',
                'slug' => 'social-media-signals',
                'excerpt' => 'Do social media signals impact your search rankings? We analyze the data and provide best practices for integrating social into your SEO.',
                'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'author' => 'Jessica Lee',
                'date' => 'Nov 28, 2024',
                'comments' => 15,
                'category' => 'Social Media'
            ]
        ];

        $seo_title = 'Blog';
        return view('frontend.blog', compact('posts', 'seo_title'));
    }

    public function blogShow($slug)
    {
        // Dummy single post data (normally fetched from DB)
        $post = (object) [
            'title' => 'The Future of SEO: 5 Trends to Watch in 2025',
            'slug' => $slug,
            'content' => '<p class="mb-4">As we approach 2025, the landscape of Search Engine Optimization (SEO) is undergoing a paradigm shift. The integration of Artificial Intelligence (AI), the rise of voice search, and the increasing importance of user experience are redefining how we approach digital visibility.</p>
                          <h3 class="text-2xl font-bold mb-3 mt-6">1. AI-Driven Search Experiences</h3>
                          <p class="mb-4">Search engines are becoming smarter. Google\'s SGE (Search Generative Experience) is just the beginning. In 2025, optimizing for AI means creating high-quality, authoritative content that directly answers user queries with depth and nuance.</p>
                          <h3 class="text-2xl font-bold mb-3 mt-6">2. Voice Search Optimization</h3>
                          <p class="mb-4">With the proliferation of smart speakers and virtual assistants, voice search is no longer a novelty. Long-tail keywords and conversational phrases will become critical for capturing this traffic.</p>
                          <h3 class="text-2xl font-bold mb-3 mt-6">3. Core Web Vitals & User Experience</h3>
                          <p class="mb-4">Google has made it clear: page experience matters. Fast loading times, stability, and interactivity are not just "nice to haves" but essential ranking factors.</p>
                          <blockquote class="border-l-4 border-sky-500 pl-4 italic my-6 text-slate-600 dark:text-slate-400">"The future of SEO is not just about keywords, but about understanding and fulfilling user intent in the most efficient way possible."</blockquote>
                          <p>To stay ahead, businesses must adopt a holistic approach that combines technical excellence with compelling storytelling.</p>',
            'image' => 'https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80',
            'author' => 'Sarah Johnson',
            'date' => 'Dec 15, 2024',
            'comments_count' => 12,
            'category' => 'SEO Strategy',
            'tags' => ['SEO', 'AI', 'Digital Marketing', '2025 Trends']
        ];

        $seo_title = $post->title;
        return view('frontend.blog-details', compact('post', 'seo_title'));
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
