<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Dashboard extends Controller
{
    public function index()
    {
        //dd(Auth()->user()->company_name);
        return view('content.agency.dashboards');
    }

    //public function profile(){
    //  dd(Auth()->user()->id);
    //return view('content.agency.dashboards');
    // }

    public function profile()
    {
        //dd(auth()->user()->company_phone);
        return view('content.Agency.profile');
    }

    public function profileEdit(){
        return view('content.Agency.editProfile');
    }

    public function profileUpdate(Request $resquest){
        $user = User::find(auth()->user()->id);

        $user->company_name     = $resquest->company_name;
        $user->company_phone    = $resquest->company_phone;
        $user->about            =$resquest->about;
        $user->type             =$resquest->type;
        $user->founded          =$resquest->founded;
        $user->specialities     =$resquest->specialities;
        $flag = $user->save();
        if($flag)
            return back()->withInput(['sucess'=>'profile updated']);
        else
            dd('not updated');
        //dd($resquest->all());
    }
}
