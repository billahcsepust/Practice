<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Company extends Controller
{
    public function Index(){
        return view('CompanyAuth.login',['url'=>'employer']);
    }
    public function companyLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email'
        ]);
        if(Auth::guard('employer')->attempt(['email'=>$request->email],$request->get('remember'))){
            return redirect()->intended('/employer');
        }
        return back()->withInput($request->only('email','remember'));
    }
}
