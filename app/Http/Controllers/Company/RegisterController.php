<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Company;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo='/home';
    public function __construct()
    {
        $this->middleware('guest');
    }
    protected function validator(array $data)
    {
        return Validator::make($data,[
            'first_name'=>['required','string','max:255'],
            'last_name'=>['required','string','max:255'],
            'business_name'=>['required','string','max:255'],
            'email'=>['required','string','email','max:255','unique:users']
        ]);
    }
    protected function create(array $data){
        return Company::create([
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
            'business_name'=>$data['business_name'],
            'email'=>$data['email']
        ]);
    }
}
