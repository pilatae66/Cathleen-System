<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ChildPatient extends Model
{
    use Notifiable;

    public function getFullNameAttribute()
    {
        return $this->firstname . " " . $this->middlename . " " . $this->lastname;
    }
}
