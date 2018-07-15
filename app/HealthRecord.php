<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;

class HealthRecord extends Model
{
    protected $fillable = [
        'diagnosis', 'treatment', 'date', 'patientID', 'doctorID'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorID', 'id');
    }
}
