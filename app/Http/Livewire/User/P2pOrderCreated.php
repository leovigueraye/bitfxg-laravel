<?php

namespace App\Http\Livewire\User;

use App\Mail\P2pOrder;
use App\Models\OrdersP2p;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class P2pOrderCreated extends Component
{
    use WithFileUploads;

    public $thisorder;
    public $photo;
    protected $listeners = ['OrderPayed' => '$refresh'];
    public $viewProof = false;


    public function render()
    {
        return view('livewire.user.p2p-order-created');
    }

    public function savePayment()
    {
        $this->validate([
            'photo' => 'image|max:1024|mimes:png,jpg,jpeg', // 1MB Max
        ]);
        $path = $this->photo->store('uploads', 'public');
        $order = OrdersP2p::where('id', $this->thisorder->id)->first();
        $order->screenshot = $path;
        $order->first_payment = 'completed';
        $order->save();
        
        if ($order->receiver == Auth::user()->id and $order->order == "BUY"){
            $user = $order->oUser->name;
            $email = $order->user->email;
            $name = $order->user->name;
        }
        
        elseif ($order->receiver != Auth::user()->id and $order->order == "SELL"){
            $user = $order->user->name;
            $email = $order->oUser->email;
            $name = $order->oUser->name;
        }
        
        $subject = "Payment Made for order ID $order->order_id";
        $message = "This is to inform you that $user has made the payment for this order with ID: $order->order_id. Please confirm transaction and take neccessary action";
        Mail::to($email)->send(new P2pOrder($name, $subject,$message)); 

        $this->emit('OrderPayed');
    }

    public function showProof(){
        $this->viewProof = true;
    }
    public function hideProof(){
        $this->viewProof = false;
    }



    public function releaseFund(){
        $order = OrdersP2p::where('id', $this->thisorder->id)->first();
        
        $buyer = User::where('id', $order->user_id)->first();
        $seller = User::where('id', $order->receiver)->first();

        if($order->order == 'SELL' and Auth::user()->id == $seller->id){
            
            User::where('id', $order->user_id)->update([
                'p2p_balance' => $buyer->p2p_balance + $order->send,
            ]);
            
            User::where('id', $order->receiver)->update([
                'p2p_balance' => $seller->p2p_balance - $order->send,
            ]);
     
            
        }elseif($order->order == 'BUY' and Auth::user()->id != $seller->id){
            
           User::where('id', $order->user_id)->update([
                'p2p_balance' => $buyer->p2p_balance - $order->send,
            ]);
            
            User::where('id', $order->receiver)->update([
                'p2p_balance' => $seller->p2p_balance + $order->send,
            ]);
        }
        

        // update order
        $order->status = 'completed';
        $order->payment_status = 'completed';
        $order->save();

        $name = $order->user->name;
        
         if ($order->receiver == Auth::user()->id and $order->order == "SELL"){
            $user = $order->oUser->name;
            $email = $order->user->email;
            $name = $order->user->name;
        }
        
        elseif ($order->receiver != Auth::user()->id and $order->order == "BUY"){
            $user = $order->user->name;
            $email = $order->oUser->email;
            $name = $order->oUser->name;
        }
        
        $subject = "Funds released into your P2P account on order ID $order->order_id";
        $message = "This is to inform you that counterparty have confirm your transaction and fund have been released into your P2P account and this order have been completed. Please login to confirm this transaction. Contact support if you have any issue with this transaction.";
        Mail::to($email)->send(new P2pOrder($name, $subject,$message)); 

        session()->flash('success', 'P2p Transaction successful');
        $this->emit('OrderPayed');
    }
}
