<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    use Notifiable;
    protected $fillable = [
        'firstName','middleName', 'lastName', 'gender', 'contactNumber','symptoms', 'address', 'staffID', 'docID',
    ];

    public function getFullNameAttribute()
    {
        return $this->firstname . " " . $this->middlename. " " . $this->lastname;
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'docID', 'id');
    }

    public function child()
    {
        return $this->hasOne(ChildPatient::class);
    }
    
    public function routeNotificationForKarix()
    {
        return $this->contact_number;
    }
}
