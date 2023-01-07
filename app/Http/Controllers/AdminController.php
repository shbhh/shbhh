<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LeadModel;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(Request $req){
        $submit = $req['submit'];
        if ($submit == "submit"){
            $req->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            if(\Auth::attempt($req->only('email','password'))){
                return redirect('/home');
            }else{
                return redirect('/login')->withError('Incorrect Username Or Password');
            }
        }
        return view('login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/login');
    }

    public function add_lead(Request $req)
    {
        $submit = $req['submit'];
        if ($submit == "submit") {
            $req -> validate([
                 'first_name' => 'required',
                 'last_name' => 'required',
                 'title'      => 'required',
                 'company'    => 'required',
                 'phone'      => 'required|min:10'


            ]);
            $lead = new LeadModel;
            $lead->first_name = $req['first_name'];
            $lead->last_name = $req['last_name'];
            $lead->title = $req['title'];
            $lead->company = $req['company'];
            $lead->phone = $req['phone'];
            $lead->email = $req['email'];
            $lead->lead_source = $req['lead_source'];
            $lead->lead_status = $req['lead_status'];
            $lead->street = $req['street'];
            $lead->city = $req['city'];
            $lead->state = $req['state'];
            $lead->zip_code = $req['zip_code'];
            $lead->country = $req['country'];
            $lead->description = $req['description'];
            $lead->save();

            return redirect('/leads/manage-leads');
        }
        return view('leads/add_lead');
    }
      public function manage_leads()
      {
        $data['leads'] = LeadModel::all();
        return view('leads/manage_leads')->with($data);
      }

      public function delete_lead($id){
        $lead = LeadModel::find($id);
        if($lead == ""){
            return redirect('/leads/manage-leads');
        }else{
            $lead->delete();
            return redirect('/leads/manage-leads');
        }
      }

      public function edit_lead($id ,  Request $req){
        $lead = LeadModel::find($id);
        if($lead == ""){
            return redirect('/leads/manage-leads');
        }

        $submit = $req['submit'];
        if ($submit == "submit") {
            $req -> validate([
                 'first_name' => 'required',
                 'last_name' => 'required',
                 'title'      => 'required',
                 'company'    => 'required',
                 'phone'      => 'required|min:10'


            ]);
      
            $lead->first_name = $req['first_name'];
            $lead->last_name = $req['last_name'];
            $lead->title = $req['title'];
            $lead->company = $req['company'];
            $lead->phone = $req['phone'];
            $lead->email = $req['email'];
            $lead->lead_source = $req['lead_source'];
            $lead->lead_status = $req['lead_status'];
            $lead->street = $req['street'];
            $lead->city = $req['city'];
            $lead->state = $req['state'];
            $lead->zip_code = $req['zip_code'];
            $lead->country = $req['country'];
            $lead->description = $req['description'];
            $lead->save();

            return redirect('/leads/manage-leads');
        }
        $data['lead_details'] = $lead;
        return view('leads/edit_lead')->with($data);
      }
}
