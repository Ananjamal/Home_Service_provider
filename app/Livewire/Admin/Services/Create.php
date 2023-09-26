<?php

namespace App\Livewire\Admin\Services;
use Illuminate\Support\Facades\Session;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;


class Create extends Component
{
    use WithFileUploads ;

    public $services;
    public $serviceName;
    public $description;
    public $image;

    protected $rules = [
        'serviceName' => 'required|min:5',
        'description' => 'required',
        'image' => 'required',
    ];
    public function Store()
    {
        $this->validate();
        $this->image->store('services', 'public');
        $this->services['image'] = 'services/' . $this->image->hashName();

        Service::create([
            'service_name' => $this->serviceName,
            'description' => $this->description,
            'image' => $this->services['image'], // Save the image name in the database
        ]);
        $this->resetInput();

        $message = 'Service created successfully!';
        $this->dispatch('refreshpage', ['message' => $message]);



        $this->resetInput();
    }
    public function resetInput()
    {
        $this->serviceName = null;
        $this->description = null;
        $this->image = null;
    }
    public function render()
    {
        return view('livewire.admin.services.create');
    }

}
