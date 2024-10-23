<?php

namespace App\Livewire;

use Livewire\Component;

class Headerthree extends Component
{
    public $unreadNotifications;

    public function mount()
    {
        // Dummy data for now
        $this->unreadNotifications = 3; // Hardcoded value
    }

    public function render()
    {
        return view('livewire.headerthree');
    }
}
