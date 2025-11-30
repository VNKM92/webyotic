<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;

class Sidebar extends Component
{
    public $isOpen = false;
    public $activeMenu = '';

    public function toggleSidebar()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function setActiveMenu($menu)
    {
        $this->activeMenu = $menu;
    }

    public function render()
    {
        return view('livewire.layout.sidebar');
    }
}
