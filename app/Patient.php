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

    public function immunization()
    {
        return $this->hasMany(Immunization::class);
    }

    public function prenatal()
    {
        return $this->hasMany(PrenatalCare::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'docID', 'id');
    }

    public function child()
    {
        return $this->hasOne(ChildPatient::class);
    }

    public function adult()
    {
        return $this->hasOne(AdultPatient::class);
    }
    
    public function routeNotificationForKarix()
    {
        return $this->contact_number;
    }
}
