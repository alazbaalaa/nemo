<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;
use Illuminate\Support\Facades\Hash;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create(
        [
            'name' => ' khatwa',
            'connection' => 'khatwa@khair.org',
            'Collaboration_type' => 'mergers',
        ],
        [
            'name' => ' khatwa',
            'connection' => 'khatwa@khair.org',
            'Collaboration_type' => 'joint ventures',
        ],
        [
            'name' => ' khatwa',
            'connection' => 'khatwa@khair.org',
            'Collaboration_type' => 'partnerships',
        ],
        [
            'name' => ' khatwa',
            'connection' => 'khatwa@khair.org',
            'Collaboration_type' => 'strategic alliances',
        ],
        [
            'name' => ' khatwa',
            'connection' => 'khatwa@khair.org',
            'Collaboration_type' => 'partnerships',
        ]

    );
    }
}
