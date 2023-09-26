<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class FlashMessage extends Component
{
    public $message;

    protected $listeners = ['flashMessage' => 'setFlashMessage'];

    public function setFlashMessage($message)
    {
        $this->message = $message;
    }
    public function render()
    {
        return view('livewire.admin.flash-message')->layout('layouts.admin.app');
    }
}
