<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\On;

class Services extends Component
{
    public $services;
    public $service_id;

    #[On('refreshpage')]
    public function refreshpage($message) {
        session()->flash('success', $message['message']);
        $this->services = Service::orderBy('id', 'desc')->get();
        $this->service_id = null;
    }


    public function mount()
    {
        $this->services = Service::orderBy('id', 'desc')->get();
   }
    public function edit_service($id)
    {
        $this->service_id = $id;
    }
    public function delete_service($id)
    {
        $this->service_id = $id;
    }

    public function render()
    {
        return view('livewire.admin.services.services')->layout('layouts.admin.app');
    }
}
