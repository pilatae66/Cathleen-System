<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use Notifiable;

    protected $guard = "doctor";

    protected $fillable = [
        'doctorFname', 'doctorLname','contactNumber', 'address', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
