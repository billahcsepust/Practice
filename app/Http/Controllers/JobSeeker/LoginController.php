<?php

namespace App\Http\Controllers\JobSeeker;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo='/home';
    public function __construct(){
        $this->middleware('guest:JobSeeker')->except('logout');
    }
}
