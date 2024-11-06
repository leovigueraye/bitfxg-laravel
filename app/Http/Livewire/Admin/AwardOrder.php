<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AwardOrder extends Component
{
    public $order;
    public $user;
    public $amount;
    public $type = 'Credit';
    protected $listeners = ['refreshAward' => '$refresh'];

    public function render()
    {
        return view('livewire.admin.award-order');
    }


    public function award(){

        $user = User::find($this->user);
        if ($this->amount > $user->p2p_balance and $this->type == 'Debit') {
            session()->flash('message', "Insufficient fund in $user->name P2p Account Balance");
        }else{
            if ($this->type == 'Credit') {
                $user->p2p_balance = $user->p2p_balance + $this->amount;
                $user->save();
            }else {
                $user->p2p_balance = $user->p2p_balance - $this->amount;
                $user->save();
            }
            $this->reset(['amount']);
            session()->flash('success', "Action successful");
            $this->emit('refreshAward');
        }

    }
}
