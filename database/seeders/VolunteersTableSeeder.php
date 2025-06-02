<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Hash;

class VolunteersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Volunteer::create(
        [
            'full_name' => ' mohammed ali',
            'phone_nomber' => '0987654321',
            'email' => 'm.ali@example.com',
            'gender' => 'male',
            'age' => 25,
            'Place_of_residence' => 'syria',
            'Academic_achievement' => 'bacaloreous',
            'Profession' => 'eng',
            'skills' => 'desing , driving',
            'profile_image' => 'avatar.jpg',
            'status' => 'activ',
            'Join_date' => now(),
            'number_of_hours' => 10,
            'Number_of_posts' => 2,
            'Overall_Rating' => 4.5,
        ],


        [
            'full_name' => ' ahmed ali',
            'phone_nomber' => '0983531653',
            'email' => 'a.ali@example.com',
            'gender' => 'male',
            'age' => 25,
            'Place_of_residence' => 'syria',
            'Academic_achievement' => 'bacaloreous',
            'Profession' => 'eng',
            'skills' => 'software , driving, comunication',
            'profile_image' => 'avatar.jpg',
            'status' => 'actic',
            'Join_date' => now(),
            'number_of_hours' => 10,
            'Number_of_posts' => 3,
            'Overall_Rating' => 6.5,
        ],

        [
            'full_name' => '  zaid azbeh',
            'phone_nomber' => '0983235467',
            'email' => 'zaid@example.com',
            'gender' => 'male',
            'age' => 22,
            'Place_of_residence' => 'syria',
            'Academic_achievement' => 'bacaloreous',
            'Profession' => 'doctor',
            'skills' => ' comunication , driving',
            'profile_image' => 'avatar.jpg',
            'status' => 'actic',
            'Join_date' => now(),
            'number_of_hours' => 10,
            'Number_of_posts' => 2,
            'Overall_Rating' => 7,
        ],
        [
            'full_name' => ' mohammed azbeh',
            'phone_nomber' => '0978645325',
            'email' => 'azbeh@example.com',
            'gender' => 'male',
            'age' => 24,
            'Place_of_residence' => 'syria',
            'Academic_achievement' => 'bacaloreous',
            'Profession' => 'eng',
            'skills' => 'desing , driving',
            'profile_image' => 'avatar.jpg',
            'status' => 'actic',
            'Join_date' => now(),
            'number_of_hours' => 10,
            'Number_of_posts' => 5,
            'Overall_Rating' => 7.5,
        ],
        [
            'full_name' => '  alaa azbeh',
            'phone_nomber' => '0987634267',
            'email' => 'alaa@example.com',
            'gender' => 'female',
            'age' => 23,
            'Place_of_residence' => 'syria',
            'Academic_achievement' => 'bacaloreous',
            'Profession' => 'eng',
            'skills' => 'software , driving , comunication',
            'profile_image' => 'avatar.jpg',
            'status' => 'actic',
            'Join_date' => now(),
            'number_of_hours' => 10,
            'Number_of_posts' => 4,
            'Overall_Rating' => 6.5,
        ]

    );
    }
}
