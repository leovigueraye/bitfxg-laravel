<?php

namespace App\Http\Livewire\User;

use App\Models\Adverts;
use App\Models\Settings;
use App\Models\SettingsCont;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BuyAdd extends Component
{
    public $nickname;
    public $minimum;
    public $maximum;
    public $rate;
    public $nicknamep;
    public $minimump;
    public $maximump;
    public $ratep;
    public $status;

    public function mount(){
        $buyAds = Adverts::where('user_id', Auth::user()->id)->where('type', 'BUY')->first();
        if ($buyAds) {
            $this->nicknamep = $buyAds->nickname;
            $this->minimump = $buyAds->min_limit;
            $this->maximump = $buyAds->max_limit;  
            $this->ratep = $buyAds->rate;
            $this->status = $buyAds->status;
        }
    }

    public function render()
    {
        return view('livewire.user.buy-add',[
            'buyAd' => Adverts::where('user_id', Auth::user()->id)->where('type', 'BUY')->first(),
        ]);
    }

    public function createBuyAd(){
        sleep(2);
        $user = Auth::user();

        if(empty($user->account_name) or empty($user->bank_name) or empty($user->account_number)){
            session()->flash('message', 'You must setup your Bank Account Details before you can create ad');
            return redirect()->route('profile');
        }

        $settings = SettingsCont::find(1);

        $ad = new Adverts();
        $ad->nickname = $this->nickname;
        $ad->user_id = Auth::user()->id;
        $ad->min_limit = $this->minimum;
        $ad->max_limit = $this->maximum;
        $ad->rate = $this->rate;
        $ad->base = 'USD';
        $ad->quote = $settings->local_currency;
        $ad->type = 'BUY';
        $ad->status = 'active';
        $ad->save();

        session()->flash('success', 'Buy ad successfully created.');
        return redirect()->to('/dashboard/p2p-window');
    }

    public function changeStatus($status){
        $this->status = $status;
    }

    public function updateBuyAd(){

        sleep(2);
        
        $ad = Adverts::where('user_id', Auth::user()->id)->where('type', 'BUY')->first();
        $ad->nickname = $this->nicknamep;
        $ad->min_limit = $this->minimump;
        $ad->max_limit = $this->maximump;
        $ad->rate = $this->ratep;
        $ad->status = $this->status;
        $ad->save();
        session()->flash('success', 'Action successful.');
    }

    public function deleteBuyAd(){
        Adverts::where('user_id', Auth::user()->id)->where('type', 'BUY')->delete();
        session()->flash('success', 'Action successful.');
    }
}
