<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Content extends Component
{
    #[On('refreshContent')]
    public function render()
    {
        return view('livewire.content');
    }
}
