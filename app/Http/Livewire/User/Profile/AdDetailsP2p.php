<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdDetailsP2p extends Component
{
    public $phoneNumber;
    public $instructions;

    public function mount(){
        $this->phoneNumber = Auth::user()->phone;
        $this->instructions = Auth::user()->instructions;

    }
    public function render()
    {
        return view('livewire.user.profile.ad-details-p2p');
    }

    public function saveInformation(){
        $user = User::find(Auth::user()->id);
        $user->phone = $this->phoneNumber;
        $user->instructions = $this->instructions;
        $user->save();
        session()->flash('success', 'Action Successful');
    }
}
