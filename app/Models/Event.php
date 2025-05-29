<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $fillable = [
        'name', 'description', 'location', 'start_date',
        'end_date', 'requirment', 'status',
        'Maximum_number_of_volunteers', 'id_project', 'id_destination'
    ];
}
