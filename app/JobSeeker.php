<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class JobSeeker extends Authenticatable
{
    use Notifiable;
    protected $guard='JobSeeker';
    protected $fillable=[
        'first_name','last_name','email',
    ];
}
