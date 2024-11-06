<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\NewNotification;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class VerifyController extends Controller
{
    //
    public function verifyaccount(Request $request){

        $this->validate($request, [
            'idcard' => 'mimes:jpg,jpeg,png|max:4000|image',
            'passport' => 'mimes:jpg,jpeg,png|max:4000|image',
        ]);
        
        $whitelist = array('jpeg','jpg','png');

        if($request->hasfile('idcard'))
        {
            $idcard = $request->file('idcard');
            $idcard_extension = $idcard->extension();
            if (in_array($idcard_extension, $whitelist)) {
                $idcard_path = $idcard->store('uploads', 'public');
            } else {
                return redirect()->back()
                    ->with('message', 'Unaccepted Image Uploaded');
            }
        }

        if($request->hasfile('passport'))
        {
            $passport = $request->file('passport');
            $passport_extension = $passport->extension();

            if (in_array($passport_extension, $whitelist)) {
                $passport_path = $passport->store('uploads', 'public');
            } else {
                return redirect()->back()
                    ->with('message', 'Unaccepted Image Uploaded');
            }
        }
  
        //update user
        User::where('id',Auth::user()->id)
        ->update([
            'id_card' => $idcard_path,
            'passport' => $passport_path,
            'account_verify' => 'Under review',
        ]);
        $user = Auth::user();

        $settings=Settings::find(1);
        $message = "This is to inform you that $user->name just submitted his ID-CARD and PASSPORT for identity verification, please login your admin account to review and take neccessary action.";
        $subject = "Identity Verification Request from $user->name";
        $url = config('app.url').'/admin/dashboard/kyc';

        Mail::to($settings->contact_email)->send(new NewNotification($message, $subject,'Admin', $url));
  
        return redirect()->back()
            ->with('success', 'Action Sucessful! Please wait while we verify your documents.');
    }

}
