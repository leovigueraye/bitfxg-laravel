<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Agent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\CPTrait;

class LogicController extends Controller
{

    use CPTrait;


    public function delagent(Request $request, $id){
        //delete the user from agent model if exists
         $agent=Agent::where('id',$id)->first();
         
        if(!empty($agent)){
            Agent::where('id', $agent->id)->delete();
        }
        return redirect()->back()
        ->with('message', "Action successful!.");
    }

    
    //Add agent
  public function addagent(Request $request){
    
    //get agent if exists
   $ag = Agent::where('agent',$request['user'])->first();
          //check if the agent already exists
          if(count($ag)>0){
            //update the agent info
            Agent::where('id',$ag->id)->increment('total_refered', $request['referred_users']);
          }
          else{
            //add the referee to the agents model
          $agent_id = DB::table('agents')->insertGetId(
            [
              'agent' => $request['user'],
              'created_at' => \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ]
           );
          //increment refered clients by 1
          Agent::where('id',$agent_id)->increment('total_refered', $request['referred_users']);
            }
    
    return redirect()->route('agents')
    ->with('success', 'Action successful!');
  }
   //Return view agent route
   public function viewagent($agent)
   {
     return view('admin.viewagent')
       ->with(array(
          'title'=>'Agent record',
          'agent'=> User::where('id',$agent)->first(),
          'ag_r' => User::where('ref_by',$agent)->get(),
       ));
   }
   
}
