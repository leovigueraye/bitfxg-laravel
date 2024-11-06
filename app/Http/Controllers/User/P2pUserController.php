<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Adverts;
use Illuminate\Http\Request;

class P2pUserController extends Controller
{
    
    public function showWindow(){
        
        $adv = new Adverts();
        $adv->payment_methods = 'bank transfer';
        $adv->save();

        return view('user.p2p.window', [
            'title' => 'P2p exchnage',
        ]);
    }
}
