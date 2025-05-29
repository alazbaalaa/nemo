<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
     protected $fillable = [
        'id_volunteer',
        'id_effectiveness',
        'Attendance_time',
        'dismissal_time',
        'hours'
    ];
}
