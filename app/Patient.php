<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'gender', 'contactNumber', 'address', 'staffID',
    ];
}
