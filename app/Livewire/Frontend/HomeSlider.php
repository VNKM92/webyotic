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
['title' => 'Creative Solutions', 'subtitle' => 'Design & Development', 'image' => '/slides/slide2.jpg'],
['title' => 'Grow With Us', 'subtitle' => 'Scale your business', 'image' => '/slides/slide3.jpg'],
];
}


public function next()
{
$this->current = ($this->current + 1) % count($this->slides);
}


public function prev()
{
$this->current = ($this->current - 1 + count($this->slides)) % count($this->slides);
}


public function render()
{
return view('livewire.frontend.home-slider');
}
}