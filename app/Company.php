<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Company as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Company extends Authenticatable
{
    use Notifiable;
    protected $fillable=[
        'first_name','last_name','business_name','email',
    ];
    protected $casts=[
        'email_verified_at'=> 'datetime'
    ];
}
