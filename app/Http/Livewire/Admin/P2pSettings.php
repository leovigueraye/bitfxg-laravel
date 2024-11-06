<?php

namespace App\Http\Livewire\Admin;

use App\Models\SettingsCont;
use Livewire\Component;

class P2pSettings extends Component
{
    public $enableModule;
    public $localCurrency;
    public $commission;

    public function mount(){
        $set = SettingsCont::find(1);
        $this->localCurrency = $set->local_currency;
        $this->enableModule = $set->enable_p2p;
        $this->commission = $set->commission_p2p;
    }

    public function render()
    {
        return view('livewire.admin.p2p-settings');
    }

    public function enableModule(){
        $this->enableModule = 'true';
    }

    public function disableModule(){
        $this->enableModule = 'false';
    }

    public function saveSettings(){
        $set = SettingsCont::find(1);
        $set->local_currency = $this->localCurrency;
        $set->commission_p2p = $this->commission;
        $set->enable_p2p = $this->enableModule;
        $set->save();
        session()->flash('status', 'Settings Saved');
    }


}
