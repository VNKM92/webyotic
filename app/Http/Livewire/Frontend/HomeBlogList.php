<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Post;

class HomeBlogList extends Component
{
    public function render()
    {
        $posts = Post::where('is_published', true)->orderBy('created_at','desc')->take(6)->get();
        return view('livewire.frontend.home-blog-list', compact('posts'));
    }
}
