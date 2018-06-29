<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthRecord extends Model
{
    protected $fillable = [
        'diagnosis', 'treatment', 'date', 'patientID', 'doctorID'
    ];
}
