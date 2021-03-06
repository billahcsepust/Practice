<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Company extends Authenticatable
{
    use Notifiable;
    protected $guard='company';
    protected $fillable=[
        'first_name','last_name','business_name','email',
    ];
}
