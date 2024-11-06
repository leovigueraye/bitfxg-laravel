<?php

namespace App\Http\Livewire\User;

use App\Models\Adverts;
use App\Models\SettingsCont;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SellAdd extends Component
{
    public $sellnickname;
    public $sellmin;
    public $sellmax;
    public $sellrate;
    public $sellnick;
    public $sellmini;
    public $sellmaxi;
    public $sellrateup;
    public $sellstatus;

    public function mount(){
        $selladv = Adverts::where('user_id', Auth::user()->id)->where('type', 'SELL')->first();
        if ($selladv) {
            $this->sellnick = $selladv->nickname;
            $this->sellmini = $selladv->min_limit;
            $this->sellmaxi = $selladv->max_limit;  
            $this->sellrateup = $selladv->rate;
            $this->sellstatus = $selladv->status;
        }
    }
    public function render()
    {
        return view('livewire.user.sell-add',[
            'sellAd' => Adverts::where('user_id', Auth::user()->id)->where('type', 'SELL')->first(),
        ]);
    }

    public function createSellAd(){
        sleep(2);
        $user = Auth::user();
        if(empty($user->account_name) or empty($user->bank_name) or empty($user->account_number)){
            session()->flash('message', 'You must setup your Bank Account Details before you can create ad');
            return redirect()->route('profile');
        }
        $settings = SettingsCont::find(1);
        
        $ad = new Adverts();
        $ad->nickname = $this->sellnickname;
        $ad->user_id = Auth::user()->id;
        $ad->min_limit = $this->sellmin;
        $ad->max_limit = $this->sellmax;
        $ad->rate = $this->sellrate;
        $ad->base = 'USD';
        $ad->quote =  $settings->local_currency;
        $ad->type = 'SELL';
        $ad->status = 'active';
        $ad->save();

        session()->flash('success', 'Sell ad successfully created.');
        return redirect()->to('/dashboard/p2p-window');
    }

    public function updateSellAd(){

        sleep(2);
        
        $ad = Adverts::where('user_id', Auth::user()->id)->where('type', 'SELL')->first();
        $ad->nickname = $this->sellnick;
        $ad->min_limit = $this->sellmini;
        $ad->max_limit = $this->sellmaxi;
        $ad->rate = $this->sellrateup;
        $ad->status = $this->sellstatus;
        $ad->save();
        session()->flash('success', 'Action successful.');
    }

    public function changeSellStatus($status){
        $this->sellstatus = $status;
    }

    public function deleteSellAd(){
        Adverts::where('user_id', Auth::user()->id)->where('type', 'SELL')->delete();
        session()->flash('success', 'Action successful.');
    }
}
