<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KirimPesan extends Component
{
    public $name,$email,$subject,$message;

    public function render()
    {
        return view('livewire.kirim-pesan');
    }

    public function kirimPesan()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string|max:40',
            'message' => 'required|string|max:255'
        ]);
        session()->flash('message');
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->subject = null;
        $this->message = null;
    }
}
