<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;
    public $service;

    public $service_id;
    public $serviceName;
    public $description;
    public $image;

    protected $rules = [
        'serviceName' => 'required|min:5',
        'description' => 'required',
    ];

    public function mount($id)
    {
        $this->service_id = $id;
        $this->service = Service::findOrFail($this->service_id);
        $this->serviceName = $this->service->service_name;
        $this->description = $this->service->description;
    }
    public function update()
    {
        $this->validate();

        if ($this->image) {
            // Delete the previous image if it exists
            if ($this->service->image) {
                Storage::delete('public/' . $this->service->image);
            }

            // $imagePath = $this->image->store('services', 'public');
            // $this->service->image = $imagePath;

            $this->image->store('services', 'public');
            $this->service['image'] = 'services/' . $this->image->hashName();
        }

        $this->service->update([
            'service_name' => $this->serviceName,
            'description' => $this->description,
            'image' => $this->service['image'],
        ]);


        $this->resetInput();
        $message = 'Service updated successfully!';
        $this->dispatch('refreshpage', ['message' => $message]);
    }

    public function resetInput()
    {
        $this->serviceName = null;
        $this->description = null;
        $this->image = null;
    }

    public function render()
    {
        return view('livewire.admin.services.edit');
    }
}
