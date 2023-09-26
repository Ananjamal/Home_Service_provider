<?php

namespace App\Livewire\Website\Portfolio;

use Livewire\Component;

class Portfolio extends Component
{
    public function render()
    {
        return view('livewire.website.portfolio.portfolio')->layout('layouts.website.app');
    }
}
