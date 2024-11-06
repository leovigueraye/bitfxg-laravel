<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\Adverts;
use App\Models\OrdersP2p;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyStats extends Component
{
    public $wantToTransfer = false;
    public $amount;
    public $source = 'Main Account Balance';
    public $destination = 'P2P Account Balance';

    protected $listeners = ['refreshMyStats' => '$refresh'];

    public function render()
    {
        // if ($thisorder->receiver == Auth::user()->id and $thisorder->order == "BUY")
                                            
        // elseif($thisorder->receiver != Auth::user()->id and $thisorder->order == "BUY")
           
        // elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == "SELL")
        
        // elseif ($thisorder->receiver != Auth::user()->id and $thisorder->order == "SELL")
            
        
        return view('livewire.user.profile.my-stats', [
            'orders' => OrdersP2p::where('user_id', Auth::user()->id)->orWhere('receiver', Auth::user()->id)->where('status', 'completed')->count(),
            'buys' => OrdersP2p::where('user_id', Auth::user()->id)->orWhere('receiver', Auth::user()->id)->where('order', 'BUY')->where('status', 'completed')->sum('send'),
            
            'sells' => OrdersP2p::where('user_id', Auth::user()->id)->orWhere('receiver', Auth::user()->id)->where('order', 'SELL')->where('status', 'completed')->sum('send'),
            
            'buyad' => Adverts::where('user_id', Auth::user()->id)->where('type', 'BUY')->first(),
            'sellad' => Adverts::where('user_id', Auth::user()->id)->where('type', 'SELL')->first(),
        ]);
    }

    public function trasnferYes(){
        $this->wantToTransfer = true;
    }

    public function trasnferNo(){
        $this->wantToTransfer = false;
        $this->amount = '';
    }

    public function onChangeBalances(){
        if ($this->source == 'Main Account Balance' and $this->destination == 'Main Account Balance') {
            $this->destination = 'P2P Account Balance';
            $this->source = 'Main Account Balance';
        }

        if ($this->destination == 'P2P Account Balance' and $this->source == 'P2P Account Balance') {
            $this->destination = 'Main Account Balance';
            $this->source = 'P2P Account Balance';
        }
    }

    public function transfer(){
        $user = Auth::user();

        if (($user->p2p_balance < $this->amount) and $this->source == 'P2P Account Balance') {
            session()->flash('message', 'Insufficient fund in your P2P Balance');
        }elseif(($user->account_bal < $this->amount) and $this->source == 'Main Account Balance'){
            session()->flash('message', 'Insufficient fund in your Main Account Balance');
        }else {
            if ($this->source == 'P2P Account Balance') {

                User::where('id', $user->id)->update([
                    'p2p_balance' => $user->p2p_balance - $this->amount,
                ]);
                User::where('id', $user->id)->update([
                    'account_bal' => $user->account_bal + $this->amount,
                ]);
            }
            if ($this->source == 'Main Account Balance') {
                User::where('id', $user->id)->update([
                    'p2p_balance' => $user->p2p_balance + $this->amount,
                ]);
                User::where('id', $user->id)->update([
                    'account_bal' => $user->account_bal - $this->amount,
                ]);
            }
            $this->emit('refreshMyStats');
            $this->reset('amount');
            session()->flash('success', 'Action Successful');
        }

       
    }
}
