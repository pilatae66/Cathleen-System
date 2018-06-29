<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'staffFname', 'staffLname', 'position', 'gender', 'contactNumber', 'address', 'username',
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
