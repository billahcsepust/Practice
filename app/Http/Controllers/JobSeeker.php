<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSeeker extends Controller
{
    public function Index(){
        return view('JobSeekerAuth.login',['url'=>'JobSeeker']);
    }
    public function JobSeekerLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email'
        ]);
        if(Auth::guard('JobSeeker')->attempt(['email'=>$request->email],$request->get('remember'))){
            return redirect()->intended('/jobSeeker');
        }
        return back()->withInput($request->only('email','remember'));
    }
}
