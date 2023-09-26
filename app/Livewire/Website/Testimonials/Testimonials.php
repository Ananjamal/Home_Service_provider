<?php

namespace App\Livewire\Website\Testimonials;

use Livewire\Component;

class Testimonials extends Component
{
    public function render()
    {
        return view('livewire.website.testimonials.testimonials')->layout('layouts.website.app');
    }
}
