<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class HomeSlider extends Component
{
    public $slides = [];
    public $current = 0;

    public function mount()
    {
        // sample slides: in real app store slides in DB
        $this->slides = [
            ['title' => 'Welcome to Our Company', 'subtitle' => 'We build great products', 'image' => '/slides/slide1.jpg'],
            ['title' => 'Innovation First', 'subtitle' => 'Leading the way', 'image' => '/slides/slide2.jpg'],
            ['title' => 'Quality Service', 'subtitle' => 'Always for you', 'image' => '/slides/slide3.jpg'],
        ];
    }

    public function nextSlide()
    {
        $this->current = ($this->current + 1) % count($this->slides);
    }

    public function prevSlide()
    {
        $this->current = ($this->current - 1 + count($this->slides)) % count($this->slides);
    }

    public function render()
    {
        return view('livewire.frontend.home-slider');
    }
}
