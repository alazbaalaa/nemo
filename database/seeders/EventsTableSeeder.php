<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Facades\Hash;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create(
        [
          'name' => ' Distributing food ' ,
          'description' => 'Distributing food and financial aid to the poor and needy' ,
          'location' => 'syria' ,
          'start_date' => now()->subMonths(2)->format('Y-m-d'),
          'end_date' => now()->subMonths(2)->format('Y-m-d'),
          'requirment' => 'volunteers for this event' ,
          'status' => 'ended' ,
          'Maximum_number_of_volunteers' => '30' ,
          'id_project' => '23' ,
          'id_destination' => '23' ,
        ],
        [
          'name' => ' health campaigns' ,
          'description' => 'organizing medical and health campaigns' ,
          'location' => 'syria' ,
          'start_date' => now()->subMonths(2)->format('Y-m-d'),
          'end_date' =>now()->subMonths(2)->format('Y-m-d'),
          'requirment' => 'volunteers for this event' ,
          'status' => 'ended' ,
          'Maximum_number_of_volunteers' => '20' ,
          'id_project' => '11' ,
          'id_destination' => '11' ,
        ],
        [
          'name' => ' training support ' ,
          'description' => 'providing educational and training support' ,
          'location' => 'syria' ,
          'start_date' =>now()->subMonths(2)->format('Y-m-d'),
          'end_date' =>now()->subMonths(2)->format('Y-m-d'),
          'requirment' => 'volunteers for this event' ,
          'status' => 'ended' ,
          'Maximum_number_of_volunteers' => '15' ,
          'id_project' => '12' ,
          'id_destination' => '12' ,
        ],
        [
          'name' => ' major projects' ,
          'description' => 'establishing major projects such as schools' ,
          'location' => 'syria' ,
          'start_date' =>now()->subMonths(2)->format('Y-m-d'),
          'end_date' => now()->subMonths(2)->format('Y-m-d'),
          'requirment' => 'volunteers for this event' ,
          'status' => 'planned' ,
          'Maximum_number_of_volunteers' => '50' ,
          'id_project' => '60' ,
          'id_destination' => '60' ,
        ],
        [
          'name' => 'major projects ' ,
          'description' => 'charity marathons and dinner parties' ,
          'location' => 'syria' ,
          'start_date' => now()->subMonths(2)->format('Y-m-d'),
          'end_date' => now()->subMonths(2)->format('Y-m-d'),
          'requirment' => 'volunteers for this event' ,
          'status' => 'ended' ,
          'Maximum_number_of_volunteers' => '30' ,
          'id_project' => '20' ,
          'id_destination' => '20' ,
        ],
        [
          'name' => 'Distributing food' ,
          'description' => 'Distributing food and financial aid to the poor and needy' ,
          'location' => 'syria' ,
          'start_date' =>now()->subMonths(2)->format('Y-m-d'),
          'end_date' => now()->subMonths(2)->format('Y-m-d'),
          'requirment' => 'volunteers for this event' ,
          'status' => 'planned' ,
          'Maximum_number_of_volunteers' => '20' ,
          'id_project' => '30' ,
          'id_destination' => '30' ,
        ]
        );
    }
}
