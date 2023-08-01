<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Navigation extends Component
{
    #[On('refreshNavigation')]
    public function render()
    {
        return view('livewire.navigation');
    }
}
