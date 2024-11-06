<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\NewNotification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mt4Details;
use App\Models\Settings;
use App\Models\Tp_Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserSubscriptionController extends Controller
{
    
    //Save MT4 details to database
    public function savemt4details(Request $request){

        if(Auth::user()->account_bal < $request->amount){
            return redirect()->back()
            ->with('message', 'Sorry, your account balance is insufficient for this request.'); 
        }

        User::where('id', Auth::user()->id)->update([
            'account_bal' => Auth::user()->account_bal - $request->amount,
        ]);

        $mt4=new Mt4Details;
        $mt4->client_id=Auth::user()->id;
        $mt4->mt4_id= $request['userid'];
        $mt4->mt4_password=  $request['pswrd'];
        $mt4->account_type= $request['acntype'];
        $mt4->currency= $request['currency'];
        $mt4->leverage= $request['leverage'];
        $mt4->server= $request['server'];
        $mt4->duration= $request['duration'];
        $mt4->status= 'Pending';
        $mt4->save();

        //create history
        Tp_Transaction::create([
            'user' => Auth::user()->id,
            'plan' => "Subscribed MT4 Trading",
            'amount'=> $request->amount,
            'type'=>"MT4 Trading",
        ]);

        $settings = Settings::find(1);
        $user = Auth::user();

        $messaege = "This to notify you that $user->name submited MT4 details for trading, please login to take neccessary action";
        Mail::to($settings->contact_email)->send(new NewNotification($messaege, 'MT4 Details submitted', 'Admin'));

        return redirect()->back()
        ->with('success', 'Successfully subscribed to MT4 Trading, Please wait for the system to validate your credentials');
    }

    // Delete mt4 details
    public function delsubtrade($id){
        Mt4Details::find($id)->delete();
        return redirect()->back()
                ->with('success', 'MT4 Details Sucessfully Deleted');
      }
}
