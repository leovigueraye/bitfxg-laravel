<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use App\Models\Asset;
use Illuminate\Http\Request;
use App\Http\Traits\CPTrait;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    use CPTrait;

    
  // for front end content management
  function RandomStringGenerator($n) 
      { 
        $generated_string = ""; 
        $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; 
        $len = strlen($domain); 
        for ($i = 0; $i < $n; $i++) 
        { 
            $index = rand(0, $len - 1); 
            $generated_string = $generated_string . $domain[$index]; 
        } 
        // Return the random generated string 
        return $generated_string; 
    } 



public function updatemark(Request $request){

    markets::where('id', $request->id)
      ->update([
        'market'=> $request->mktcatgy,
        'base_curr'=> $request->base_currency,
        'quote_curr'=> $request->quote_currency,
        // 'commission_type'=> $request->commission_type,
        // 'commission_fee'=> $request->commission_fee,
      ]);
        return redirect()->back()
        ->with('message', 'Market Sucessfully Updated');
}

  public function updateasst(Request $request){
    Asset::where('id', $request->id)
    ->update([
        'name'=> $request->assname,
        'symbol'=> $request->assym,
        'category'=> $request->ascat,
        // 'commission_type'=> $request->commission_type,
        // 'commission_fee'=> $request->commission_fee,
    ]);
        return redirect()->back()
        ->with('message', 'Asset Sucessfully Updated');
    }

  public function updateasset(Request $request){

    $assets = new assets;
    $assets->category=$request['asset_catgy'];
    $assets->name=$request['asset_name'];
    $assets->symbol=$request['asset_symbol'];
    //$assets->commission_type=$request['coom_type'];
    //$assets->commission_fee=$request['com_fee'];
    $assets->save();

    return redirect()->back()
    ->with('message', 'Action Sucessful');
}

public function updatemarket(Request $request){
  $market = new markets;
  $market->market=$request['mktcatgy'];
  $market->base_curr=$request['base_currency'];
  $market->quote_curr=$request['quote_currency'];
 // $market->commission_type=$request['commfee_type'];
  //$market->commission_fee=$request['live_com_fee'];
  $market->save();
  return redirect()->back()
    ->with('message', 'Action Sucessful');
}

public function updatefee(Request $request){

Settings::where('id', $request->id)
  ->update([
    'commission_type'=> $request->commission_type,
    'commission_fee'=> $request->commission_fee,
  ]);
return redirect()->back()
  ->with('message', 'Action Sucessful');
}

public function delmarket($id){
markets::where('id',$id)->delete();
return redirect()->back()
        ->with('message', 'Market Sucessfully Deleted');
}

public function delassets($id){
Asset::where('id',$id)->delete();
return redirect()->back()
        ->with('message', 'Asset Sucessfully Deleted');
}




}
