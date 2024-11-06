<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Models\Mt4Details;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function confirmsub($id){
        //get the sub details
        $sub = Mt4Details::where('id',$id)->first();
        //get user
        $user = User::where('id',$sub->client_id)->first();
    
        if($sub->duration == 'Monthly'){
          $end_at = \Carbon\Carbon::now()->addMonths(1)->toDateTimeString();
        }elseif($sub->duration == 'Quaterly'){
          $end_at = \Carbon\Carbon::now()->addMonths(4)->toDateTimeString();
        }elseif($sub->duration == 'Yearly'){
          $end_at = \Carbon\Carbon::now()->addYears(1)->toDateTimeString();
        }
        
        Mt4Details::where('id',$id)->update([
          'start_date' => \Carbon\Carbon::now(),
          'end_date' => $end_at,
          'status' => "Active",
        ]);
    
        $settings = Settings::where('id', '=', '1')->first();
        $message = "$user->name, This is to inform you that your trading account management
        request has been reviewed and processed. Thank you for trusting $settings->site_name";
        Mail::to($user->email)->send(new NewNotification($message,'Subscription Account Started!', $user->name));
        return redirect()->back()->with('success', 'Subscription Sucessfully started!');
    }
    
    public function delsub($id){
        Mt4Details::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Subscription Sucessfully Deleted');
    }
}
