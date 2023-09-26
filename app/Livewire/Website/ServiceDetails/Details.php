<?php

namespace App\Livewire\Website\ServiceDetails;

use Livewire\Component;

class Details extends Component
{
    public function render()
    {
        return view('livewire.website.service-details.details')->layout('layouts.website.app');
    }
}
