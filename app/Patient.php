<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'firstName','middleName', 'lastName', 'gender', 'contactNumber','symptoms', 'address', 'staffID', 'docID',
    ];

    public function getFullNameAttribute()
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'docID', 'id');
    }
}
