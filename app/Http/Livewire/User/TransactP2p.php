<?php

namespace App\Http\Livewire\User;

use App\Mail\P2pOrder;
use App\Models\Adverts;
use App\Models\OrdersP2p;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class TransactP2p extends Component
{
    public $order;
    public $amount;
    public $quantity;

    public function render()
    {
        return view('livewire.user.transact-p2p',[
        ]);
    }

    public function calculateQuantity(){
        $advert = Adverts::where('id', $this->order->id)->first();
        if (empty($this->amount)) {
            $this->quantity = 0;
        }else{
           $this->quantity = $this->amount * $advert->rate; 
        }
        
    }

    public function createOrder(){

        $advert = Adverts::where('id', $this->order->id)->first();
        $sender = User::where('id', Auth::user()->id)->first();
        $receiver = User::where('id', $advert->user_id)->first();

        if ($sender->p2p_balance < $this->amount and $advert->type == 'BUY') {
            session()->flash('message', 'Insufficient fund in your P2P Account');
        }elseif ($receiver->p2p_balance < $this->amount and $advert->type == 'SELL') {
            session()->flash('message', "Insufficient fund in Buyer, $receiver->name's P2P Account, you can contact him to inform him about this.");
        }elseif (empty($sender->account_name) or empty($sender->account_number) or empty($sender->bank_name) ) {
            session()->flash('message', "Please set up your bank account details first");
        }else {
            $order = new OrdersP2p();
            $order->user_id = Auth::user()->id;
            $order->receiver = $advert->user_id;
            $order->order = $advert->type;
            $order->order_id = time();
            $order->status = 'pending';
            $order->payment_status = 'pending';
            $order->first_payment = 'pending';
            $order->send = $this->amount;
            $order->receive = $this->quantity;
            $order->save();

            $name = $receiver->name;
            $subject = "New P2P Buy Order Request from $sender->name";
            $message = "This is a new $order->order order from $sender->name, Please login to process the order.
            Order is valid for 1 Hour.";
            Mail::to($receiver->email)->send(new P2pOrder($name, $subject,$message)); 
            
            return redirect()->route('payorder', $order->id);
            
        }
        
    }
}
