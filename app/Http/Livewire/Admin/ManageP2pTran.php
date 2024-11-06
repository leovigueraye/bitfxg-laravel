<?php

namespace App\Http\Livewire\Admin;

use App\Models\OrdersP2p;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ManageP2pTran extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchvalue = '';

    public function render()
    {
        return view('livewire.admin.manage-p2p-tran', [
            'orders' => OrdersP2p::search($this->searchvalue)->orderByDesc('id')->paginate(10),
        ]);
    }

    public function deleteOrder($id){
        $order = OrdersP2p::where('id', $id)->first();
        Storage::disk('public')->delete($order->screenshot);
        OrdersP2p::where('id', $id)->delete();
        $this->emit('refreshUserOrder');
    }
}
