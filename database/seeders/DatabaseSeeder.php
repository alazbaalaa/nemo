<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        UsersTableSeeder::class,
        VolunteersTableSeeder::class,
        PartnersTableSeeder::class,
        CampaignsTableSeeder::class,
        EventsTableSeeder::class,
        AttendancesTableSeeder::class,
        EvaluationsTableSeeder::class,
        NoteWarningsTableSeeder::class,
    ]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
