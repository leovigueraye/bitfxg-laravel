<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class KycController extends Controller
{

    public function processKyc(Request $request){
        $user = User::where('id', $request->user_id)->first();

        if($request->action == 'Accept'){
            User::where('id',$user->id)
            ->update([
                'account_verify' => 'Verified',
            ]);
        }else {
            if (Storage::disk('public')->exists($user->id_card) and Storage::disk('public')->exists($user->passport)) {
                Storage::disk('public')->delete($user->id_card);
                Storage::disk('public')->delete($user->passport); 
            }
            User::where('id',$user->id)
            ->update([
                'account_verify' => 'Rejected',
                'id_card'=> NULL,
                'passport' => NULL,
            ]);
        }

        Mail::to($user->email)->send(new NewNotification($request->message, $request->subject, $user->name));
        return redirect()->back()->with('success', 'Action Sucessful!');
    }
    
 
}
