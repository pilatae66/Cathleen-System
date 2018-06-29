<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'scheduleDate', 'scheduleTime', 'patientID', 'doctorID'
    ];
}
