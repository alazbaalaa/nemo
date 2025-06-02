<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evaluation;
use App\Models\Volunteer;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class EvaluationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evaluation::create(
        [
            'id_volunteer'=>Volunteer::first()->id,
            'id_effectiveness'=>Event::first()->id,
            'id_admin'=> User::first()->id,
            'evalution'=> '4',
            'notes'=> 'nothing',
            'evalute_date'=>now()->subMonths(2)->format('Y-m-d'),
        ],
        [
            'id_volunteer'=> Volunteer::first()->id,
            'id_effectiveness'=>Event::first()->id,
            'id_admin'=>User::first()->id,
            'evalution'=> '5',
            'notes'=> 'nothing',
            'evalute_date'=> now()->subMonths(2)->format('Y-m-d'),
        ],
        [
            'id_volunteer'=>Volunteer::first()->id,
            'id_effectiveness'=>Event::first()->id,
            'id_admin'=> User::first()->id,
            'evalution'=> '3',
            'notes'=> 'you need to improve yourself',
            'evalute_date'=> now()->subMonths(2)->format('Y-m-d'),
        ],
        [
            'id_volunteer'=>Volunteer::first()->id,
            'id_effectiveness'=>Event::first()->id,
            'id_admin'=>User::first()->id,
            'evalution'=> '4',
            'notes'=> 'nothing',
            'evalute_date'=>now()->subMonths(2)->format('Y-m-d'),
        ],
        [
            'id_volunteer'=> Volunteer::first()->id,
            'id_effectiveness'=> Event::first()->id,
            'id_admin'=>User::first()->id,
            'evalution'=> '5',
            'notes'=> 'nothing',
            'evalute_date'=>now()->subMonths(2)->format('Y-m-d'),
        ],
        [
            'id_volunteer'=>Volunteer::first()->id,
            'id_effectiveness'=> Event::first()->id,
            'id_admin'=>User::first()->id,
            'evalution'=> '5',
            'notes'=> 'nothing',
            'evalute_date'=> now()->subMonths(2)->format('Y-m-d'),
        ]
        );

    }
}
