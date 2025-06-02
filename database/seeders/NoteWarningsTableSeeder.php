<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NoteWarning;
use App\Models\User;
use \App\Models\Volunteer;
use Illuminate\Support\Facades\Hash;

class NoteWarningsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NoteWarning::create(
        [
            'id_volunteer' =>Volunteer::first()->id,
            'id_admin' =>  User::first()->id,
            'Type' => 'note' ,
            'Content' => 'you are late' ,
            'date' =>now()->subMonths(2)->format('Y-m-d'),
        ],
        [
            'id_volunteer' =>Volunteer::first()->id ,
            'id_admin' =>  User::first()->id,
            'Type' => 'warring' ,
            'Content' => 'you are lazy' ,
            'date' => now()->subMonths(2)->format('Y-m-d'),
        ],
        [
            'id_volunteer' =>Volunteer::first()->id ,
            'id_admin' =>  User::first()->id,
            'Type' => 'note' ,
            'Content' => 'you are angry all the time ' ,
            'date' => now()->subMonths(2)->format('Y-m-d'),
        ],
        [
            'id_volunteer' =>Volunteer::first()->id ,
            'id_admin' => User::first()->id,
            'Type' => 'note' ,
            'Content' => 'you are mody' ,
            'date' => now()->subMonths(2)->format('Y-m-d'),
        ],
        [
            'id_volunteer' => Volunteer::first()->id ,
            'id_admin' => User::first()->id,
            'Type' => 'warring' ,
            'Content' => 'you are out of limits' ,
            'date' => now()->subMonths(2)->format('Y-m-d'),
        ],
        [
            'id_volunteer' => Volunteer::first()->id,
            'id_admin' => User::first()->id,
            'Type' => 'note' ,
            'Content' => ' you need to revice rules' ,
            'date' =>now()->subMonths(2)->format('Y-m-d'),
        ]
    );
    }
}
