<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'doctorFname', 'doctorLname','contactNumber', 'address', 'username',
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
