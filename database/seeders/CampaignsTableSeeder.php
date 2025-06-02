<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Campaign;
use Illuminate\Support\Facades\Hash;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create(
            [
                'name'=> 'Relief Campaigns',
                'description'=> 'Relief campaigns for a natural disaster or conflict, such as "Safe Roof" to help those affected by an earthquake somewhere.',
                'start_date'=> now()->subMonths(2)->format('Y-m-d'),
                'end_date'=> now()->subMonths(2)->format('Y-m-d'),
                'Budget'=> '7',
                'status'=> 'finished',
            ],
            [
                'name'=> 'Awareness Campaigns',
                'description'=> 'Campaigns to raise awareness of the importance of blood donation or specific diseases.',
                'start_date'=> now()->subMonths(2)->format('Y-m-d'),
                'end_date'=>now()->subMonths(2)->format('Y-m-d'),
                'Budget'=> '4',
                'status'=> 'finished',
            ],
            [
                'name'=> 'Donation Campaigns ',
                'description'=> 'Campaigns to collect financial donations to help build schools or hospitals or assist orphans.',
                'start_date'=> now()->subMonths(2)->format('Y-m-d'),
                'end_date'=>now()->subMonths(2)->format('Y-m-d'),
                'Budget'=> '10',
                'status'=> 'activ',
            ],
            [
                'name'=> 'Support Campaigns',
                'description'=> 'Campaigns to support individuals or families in need or to help people with chronic illnesses.',
                'start_date'=> now()->subMonths(2)->format('Y-m-d'),
                'end_date'=> now()->subMonths(2)->format('Y-m-d'),
                'Budget'=> '5',
                'status'=> 'activ',
            ],
            [
                'name'=> 'Social campaigns',
                'description'=> 'Campaigns to support specific communities or help the most needy.',
                'start_date'=> now()->subMonths(2)->format('Y-m-d'),
                'end_date'=>now()->subMonths(2)->format('Y-m-d'),
                'Budget'=> '6',
                'status'=> 'activ',
            ]
        );
    }
}
