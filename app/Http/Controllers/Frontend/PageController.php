<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
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

        return view('frontend.blog', compact('posts'));
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

        return view('frontend.blog-details', compact('post'));
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function gallery()
    {
        $projects = [
            [
                'title' => 'Hotel Booking System',
                'category' => 'Web Application',
                'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'A comprehensive hotel management and booking solution with real-time availability and payment gateway integration.',
                'tags' => ['Laravel', 'Vue.js', 'MySQL']
            ],
            [
                'title' => 'CRM System',
                'category' => 'Business Tool',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'Customer Relationship Management dashboard for tracking leads, sales, and client interactions.',
                'tags' => ['React', 'Node.js', 'MongoDB']
            ],
            [
                'title' => 'Tax Collection System',
                'category' => 'FinTech',
                'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'Secure platform for automated tax calculation, collection, and reporting for municipal corporations.',
                'tags' => ['Java', 'Spring Boot', 'Oracle']
            ],
            [
                'title' => 'Trip Booking Platform',
                'category' => 'Travel',
                'image' => 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'User-friendly interface for booking flights, hotels, and holiday packages with itinerary management.',
                'tags' => ['Next.js', 'Tailwind', 'API Integration']
            ],
            [
                'title' => 'Transport Management System',
                'category' => 'Logistics',
                'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'Fleet management solution offering real-time tracking, route optimization, and maintenance scheduling.',
                'tags' => ['Python', 'Django', 'PostgreSQL']
            ],
            [
                'title' => 'Crypto Currency App',
                'category' => 'Mobile App',
                'image' => 'https://images.unsplash.com/photo-1621416894569-0f39ed31d247?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'Secure mobile wallet and trading application with real-time market charts and portfolio tracking.',
                'tags' => ['Flutter', 'Firebase', 'Blockchain']
            ],
            [
                'title' => 'QuickTapp',
                'category' => 'Utility',
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'NFC-based digital business card application for seamless contact sharing and networking.',
                'tags' => ['Swift', 'Kotlin', 'NFC']
            ],
            [
                'title' => 'Restaurant Booking System',
                'category' => 'Hospitality',
                'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'description' => 'Table reservation and order management system for restaurants with menu customization.',
                'tags' => ['PHP', 'Laravel', 'Bootstrap']
            ]
        ];

        return view('frontend.gallery', compact('projects'));
    }

    public function testimonials()
    {
        $testimonials = [
            [
                'name' => 'John Anderson',
                'position' => 'CEO, TechFlow Inc.',
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'content' => 'The Hotel Booking System developed by Webyotic completely transformed our operations. The user interface is intuitive, and the backend is incredibly robust. Highly recommended!',
                'rating' => 5
            ],
            [
                'name' => 'Emily Carter',
                'position' => 'Director, City Finance Dept.',
                'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'content' => 'Their Tax Collection System is a game-changer. It streamlined our entire process, reducing errors by 90% and significantly improving citizen satisfaction.',
                'rating' => 5
            ],
            [
                'name' => 'Michael Brown',
                'position' => 'Founder, CryptoWise',
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'content' => 'Building a crypto app requires top-notch security and performance. The team delivered beyond expectations with a sleek, fast, and secure application.',
                'rating' => 5
            ],
            [
                'name' => 'Sarah Jenkins',
                'position' => 'Owner, The Golden Spoon',
                'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'content' => 'Our restaurant bookings have doubled since we launched the new system. The interface is beautiful and our customers love how easy it is to use.',
                'rating' => 4
            ],
            [
                'name' => 'David Wilson',
                'position' => 'Manager, Logistics Pro',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'content' => 'The Transport Management System gave us visibility we never had before. Real-time tracking has helped us optimize routes and save on fuel costs.',
                'rating' => 5
            ],
            [
                'name' => 'Lisa Wong',
                'position' => 'Marketing Head, TravelEase',
                'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'content' => 'QuickTapp is an innovative tool that our sales team uses daily. The Trip Booking Platform they built for us is also world-class. Great partners!',
                'rating' => 5
            ]
        ];

        return view('frontend.testimonials', compact('testimonials'));
    }
}