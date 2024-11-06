<?php

namespace App\Http\Livewire\User;

use App\Models\OrdersP2p;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
class UserOrdersP2p extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $ordersStatus = 'pending';
    protected $listeners = ['refreshUserOrder' => '$refresh'];

    public function render()
    {
        return view('livewire.user.user-orders-p2p',[
            'orders' => OrdersP2p::orderByDesc('id')
            ->where('status', $this->ordersStatus)
            ->paginate(10),
        ]);
    }

    public function changeStatus($status){
        $this->ordersStatus = $status;
    }

    public function deleteOrder($id){
        $order = OrdersP2p::where('id', $id)->first();
        Storage::disk('public')->delete($order->screenshot);
        OrdersP2p::where('id', $id)->delete();
        $this->emit('refreshUserOrder');
    }
}
