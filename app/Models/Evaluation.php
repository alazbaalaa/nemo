<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'id_volunteer',
        'id_effectiveness',
        'id_admin',
        'evalution',
        'notes',
        'evalute_date'
    ];
}
