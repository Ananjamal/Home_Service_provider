<?php

namespace App\Livewire\Website\Team;

use Livewire\Component;

class Team extends Component
{
    public function render()
    {
        return view('livewire.website.team.team')->layout('layouts.website.app');
    }
}
