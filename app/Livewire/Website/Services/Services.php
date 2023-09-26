<?php

namespace App\Livewire\Website\Services;

use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        return view('livewire.website.services.services')->layout('layouts.website.app');
    }
}
