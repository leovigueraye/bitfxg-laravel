<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Traits\CPTrait;
use App\Http\Traits\assetstrait;

class GetRates extends Controller
{
    use CPTrait, assetstrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    //Get any coin, any currency rate
     public function get_rate($coin,$currency,$option){
         //get rates
        return $this->get_rates($coin,$currency,$option);
     }

}
