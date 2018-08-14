<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'firstname', 'lastname', 'username', 'password'
    ];

    protected $hidden = [
        'remember_token, password'
    ];

    public function getFullNameAttribute(){
        return $this->firstname . " " . $this->lastname;
    }
}
