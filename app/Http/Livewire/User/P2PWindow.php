<?php

namespace App\Http\Livewire\User;

use App\Models\Adverts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class P2PWindow extends Component
{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';
    public $pagenum = 10;
    public $searchvalue = '';
    public $orderby = 'id';
    public $orderdirection = 'desc';
    public $type = 'BUY';

    public function getAdvertsProperty(){
        return Adverts::search($this->searchvalue)
        ->orderByDesc('id')
        ->with(['user'])
        ->where('user_id', '!=', Auth::user()->id)
        ->where('type', $this->type)
        ->where('status','active')
        ->paginate($this->pagenum);
    }

    public function render()
    {
        return view('livewire.user.p2-p-window',[
            'adverts' => $this->adverts,
        ]);
    }

    public function changeType($type){
        $this->type = $type;
    }

}
