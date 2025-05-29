<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoteWarning extends Model
{
    protected $fillable = [
        'id_volunteer',
        'id_admin',
        'Type',
        'Content',
        'date'
    ];
}
