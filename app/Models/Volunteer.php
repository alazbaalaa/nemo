<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
        protected $fillable = [
        'full_name', 'phone_nomber', 'email', 'gender',
        'age', 'Place_of_residence', 'Academic_achievement', 'Profession',
        'skills', 'profile_image', 'status', 'Join_date',
        'number_of_hours', 'Number_of_posts', 'Overall_Rating'
    ];
}
