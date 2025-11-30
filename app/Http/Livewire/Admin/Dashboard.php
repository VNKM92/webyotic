<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;

class Dashboard extends Component
{
    public function render()
    {
        $totalPosts = Post::count();
        $publishedPosts = Post::where('is_published', true)->count();
        $totalUsers = User::count();
        
        return view('livewire.admin.dashboard', [
            'totalPosts' => $totalPosts,
            'publishedPosts' => $publishedPosts,
            'totalUsers' => $totalUsers,
        ]);
    }
}
