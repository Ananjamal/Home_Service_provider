<?php

namespace App\Livewire\Admin\Providers;

use App\Models\User;
use Livewire\Component;

class Providers extends Component
{
    public $providers;
    public function mount()
    {
        $this->providers = User::all();
    }
    public function render()
    {
        return view('livewire.admin.providers.providers')->layout('layouts.admin.app');
    }
}
