<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $service_id;
    public $services;

    public function mount($id)
    {
        $this->service_id = $id;
        $pro = Service::findOrFail($id);
        $this->services = $pro->toArray();
    }

    public function delete()
    {
        Service::find($this->service_id)->delete();
        Storage::disk('public')->delete($this->services['image']);
        
        $message = 'Service deleted successfully!';
        $this->dispatch('refreshpage', ['message' => $message]);
    }
    public function render()
    {
        return view('livewire.admin.services.delete');
    }
}
