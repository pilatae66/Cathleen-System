<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'staffFname', 'staffLname', 'position', 'gender', 'contactNumber', 'address', 'username', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function getFullNameAttribute()
    {
        return $this->staffFname . " " . $this->staffLname;
    }
}
