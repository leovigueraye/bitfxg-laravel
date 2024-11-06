<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Models\Plans;
use App\Models\Agent;
use App\Models\User_plans;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\Tp_Transaction;
use App\Models\Activity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewNotification;
use App\Models\Adverts;
use App\Models\OrdersP2p;
use Illuminate\Support\Facades\Mail;

class ManageUsersController extends Controller
{
    // See user wallet balances
    public function loginactivity($id){

        $user = User::where('id' , $id)->first();

        return view('admin.Users.loginactivity',[
            'activities' => Activity::where('user',$id)->orderByDesc('id')->get(),
            'title'=>"$user->name login activities",
            'user'=> $user,
        ]);
    } 

    public function showUsers($id){
        $user = User::where('id' , $id)->first();
        $ref = User::whereNull('ref_by')->where('id', '!=', $id)->get();

        return view('admin.Users.referral',[
            'title'=>"Add users to $user->name referral list",
            'user'=> $user,
            'ref' => $ref,
        ]);
    }

    public function addReferral(Request $request){
        $user = User::where('id' , $request->user_id)->first();
        $ref = User::where('id', $request->ref_id)->first();
        
        $ref->ref_by = $user->id;
        $ref->save();
        return redirect()->back()
            ->with('success', "$ref->name is now referred by $user->name successfully");  
    }

    public function clearactivity($id){
        $activities = Activity::where('user',$id)->get();

        if (count($activities)>0) {
            foreach ($activities as $act) {
                Activity::where('id',$act->id)->delete();
            }
            return redirect()->back()
            ->with('success', 'Activity Cleared Successfully!');  
        }
        return redirect()->back()
        ->with('message', 'No Activity to clear!');  
    }

    public function markplanas($status, $id){
        User_plans::where('id', $id)->update([
            'active'=> $status,
        ]);
        return redirect()->back()
        ->with('success', "Plan Active state changed to $status");  
    }
    
    public function viewuser($id){
        $user = User::where('id', $id)->first();
        return view('admin.Users.userdetails',[
            'user' => $user,
            'pl' => Plans::orderByDesc('id')->get(),
            'title' => "Manage $user->name",
        ]);
    }
     //block user
    public function ublock($id){
        User::where('id',$id)->update([
            'status' => 'blocked',
        ]);
        return redirect()->back()->with('success', 'Action Sucessful!');
    }

   //unblock user
   public function unblock($id){
        User::where('id',$id)->update([
            'status' => 'active',
        ]);
        return redirect()->back()->with('success', 'Action Sucessful!');
    }

    //Turn on/off user trade
    public function usertrademode($id, $action){
        if($action=="on"){
            $action = "on";
        }elseif($action == "off"){
            $action = "off";
        }else{
            return redirect()-back()->with('message',"Unknown action!");
        }
        
        User::where('id', $id)->update([
            'trade_mode' => $action,
        ]);
        return redirect()->back()->with('success', "User trade mode has been turned $action.");
    }

    //Manually Verify users email
    public function emailverify($id){
        User::where('id', $id)->update([
          'email_verified_at' => \Carbon\Carbon::now(),
        ]);
        return redirect()->back()->with('success', 'User Email have been verified');
    }

    //top up route
    public function topup(Request $request){

        $user = User::where('id', $request->user_id)->first();
        $userdpo = Deposit::where('user', $request['user_id'])->first();

        $user_bal=$user->account_bal;
        $user_bonus=$user->bonus;
        $user_roi=$user->roi;
        $user_Ref=$user->ref_bonus;
        $user_deposit = $userdpo->amount;
  
        if($request['t_type']=="Credit") {
            if ($request['type']=="Bonus") {
                User::where('id', $request['user_id'])
                ->update([
                'bonus'=> $user_bonus + $request['amount'],
                'account_bal'=> $user_bal + $request->amount,
                ]);
            }elseif ($request['type']=="Profit") {
                User::where('id', $request->user_id)
                ->update([
                    'roi'=> $user_roi + $request->amount,
                    'account_bal'=> $user_bal + $request->amount,
                ]);
            }elseif($request['type']=="Ref_Bonus"){
                User::where('id', $request->user_id)
                ->update([
                    'ref_bonus'=> $user_Ref + $request->amount,
                    'account_bal'=> $user_bal + $request->amount,
                ]);
            }elseif($request['type']=="balance"){
                User::where('id', $request->user_id)
                ->update([
                    'account_bal'=> $user_bal + $request->amount,
                ]);
            }elseif ($request['type']=="Deposit") {
                $dp=new Deposit();
                $dp->amount= $request['amount'];
                $dp->payment_mode= 'Express Deposit';
                $dp->status= 'Processed';
                $dp->plan= $request['user_pln'];
                $dp->user= $request['user_id'];
                $dp->save();

                User::where('id', $request['user_id'])
                ->update([
                    'account_bal'=> $user_bal + $request->amount,
                ]);
            }
            
            //add history
            Tp_Transaction::create([
            'user' => $request->user_id,
            'plan' => "Credit",
            'amount'=>$request->amount,
            'type'=>$request->type,
            ]);
        
        }elseif($request['t_type']=="Debit") {
          if ($request['type']=="Bonus") {
            User::where('id', $request['user_id'])
              ->update([
                'bonus'=> $user_bonus - $request['amount'],
                'account_bal'=> $user_bal - $request->amount,
              ]);
          }elseif ($request['type']=="Profit") {
              User::where('id', $request->user_id)
                ->update([
                  'roi'=> $user_roi - $request->amount,
                  'account_bal'=> $user_bal - $request->amount,
                ]);
            }elseif($request['type']=="Ref_Bonus"){
              User::where('id', $request->user_id)
                ->update([
                  'Ref_Bonus'=> $user_Ref - $request->amount,
                  'account_bal'=> $user_bal - $request->amount,
                ]);
            }
            elseif($request['type']=="balance"){
                User::where('id', $request->user_id)
                  ->update([
                    'account_bal'=> $user_bal - $request->amount,
                  ]);
              }
            
             //add history
            Tp_Transaction::create([
                'user' => $request->user_id,
                'plan' => "Credit reversal",
                'amount'=>$request->amount,
                'type'=>$request->type,
            ]);
        
        }
        return redirect()->back()->with('success', 'Action Successful!');
    }

    //Reset Password
    public function resetpswd($id){
        User::where('id', $id)
        ->update([
            'password' => Hash::make('user01236'),
        ]);
        return redirect()->back()->with('success', 'Password has been reset to default');
    } 

    //Clear user Account
    public function clearacct(Request $request, $id){
        $settings = Settings::where('id', 1)->first();
        
        $deposits=Deposit::where('user',$id)->get();
        if(!empty($deposits)){
            foreach($deposits as $deposit){
                Deposit::where('id', $deposit->id)->delete();
            }
        }

        $withdrawals=Withdrawal::where('user',$id)->get();
        if(!empty($withdrawals)){
            foreach($withdrawals as $withdrawals){
                Withdrawal::where('id', $withdrawals->id)->delete();
            }
        }

        User::where('id', $id)->update([
            'account_bal' => '0',
            'roi' => '0',
            'bonus' => '0',
            'ref_bonus' => '0',
        ]);
        return redirect()->back()->with('success', "Account cleared to $settings->currency 0.00");
    }

    //Access users account
    public function switchuser($id){
        $user = User::where('id',$id)->first();
        $settings=Settings::where("id","1")->first();
        Auth::loginUsingId($user->id, true);
        return redirect()->route('dashboard')->with('success', "You are logged in as $user->name !");
    } 

    //Manually Add Trading History to Users Route
    public function addHistory(Request $request)
    {
      $history = Tp_Transaction::create([
        'user' => $request->user_id,
         'plan' => $request->plan,
         'amount'=>$request->amount,
         'type'=>$request->type,
        ]); 
        $user=User::where('id', $request->user_id)->first();
        $user_bal=$user->account_bal;
        if (isset($request['amount'])>0) {
            User::where('id', $request->user_id)
            ->update([
            'account_bal'=> $user_bal + $request->amount,
            ]);
        }
        $user_roi=$user->roi;
        if ( isset($request['type'])=="ROI") {
          User::where('id', $request->user_id)
            ->update([
            'roi'=> $user_roi + $request->amount,
            ]);
        }

        return redirect()->back()
      ->with('success', 'Action Sucessful!');
    }


    //Delete user
    public function delsystemuser(Request $request, $id){
        //delete the user's withdrawals and deposits
        $deposits=Deposit::where('user',$id)->get();
        if(!empty($deposits)){
            foreach($deposits as $deposit){
                Deposit::where('id', $deposit->id)->delete();
            }
        }
        $withdrawals=Withdrawal::where('user',$id)->get();
        if(!empty($withdrawals)){
            foreach($withdrawals as $withdrawals){
                Withdrawal::where('id', $withdrawals->id)->delete();
            }
        }
        //delete the user plans
        $userp=User_plans::where('user',$id)->get();
        if(!empty($userp)){
            foreach($userp as $p){
                //delete plans that their owner does not exist 
                User_plans::where('id',$p->id)->delete();
            }
        }
        //delete the user from agent model if exists
        $agent=Agent::where('agent',$id)->first();
        if(!empty($agent)){
            Agent::where('id', $agent->id)->delete();
        }

        User::where('id', $id)->delete();
        return redirect()->route('manageusers')
        ->with('success', 'User Account deleted successfully!');
    }  

    //update users info
    public function edituser(Request $request){
        
        User::where('id', $request['user_id'])
        ->update([
            'name' => $request['name'],
            'email' =>$request['email'],
            'country' =>$request['country'],
            'username' =>$request['username'],  
            'phone' =>$request['phone'], 
            'ref_link' =>$request['ref_link'], 
        ]);
        return redirect()->back()->with('success', 'User details updated Successfully!');
    }

    //Send mail to one user
    public function sendmailtooneuser(Request $request){

        $mailduser=User::where('id',$request->user_id)->first();
        Mail::to($mailduser->email)->send(new NewNotification($request->message, $request->subject, $mailduser->name));
        return redirect()->back()->with('success','Your message was sent successfully!');

    } 

    // Send Mail to all users
    public function sendmailtoall(Request $request){
        Mail::bcc(User::all())->send(new NewNotification($request->message, $request->subject, 'Investor'));
        return redirect()->back()->with('success','Your message was sent successful!');
    }

    // Delete User investment Plan
    public function deleteplan($id){
        User_plans::where('id', $id)->delete();
        return redirect()->back()->with('success', 'User Plan deleted successfully!');
    }

    public function saveuser(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'username'=> 'required|unique:users,username',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $thisid = DB::table('users')->insertGetId([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'ref_by'=>NULL,
            'username'=> $request['username'],
            'password' => Hash::make($request->password),
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]); 
         
        //assign referal link to user
        $settings=Settings::where('id', '=', '1')->first();
        $user = User::where('id', $thisid)->first();

        User::where('id', $thisid)
        ->update([
            'ref_link' => $settings->site_address.'/ref/'.$user->username,
        ]);
        return redirect()->back()->with('success', 'User created Sucessfully!');
    }


}
