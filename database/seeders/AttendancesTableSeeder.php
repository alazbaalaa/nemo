<?php

namespace Database\Seeders;
use App\Models\Attendance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attendance::create(
            [
                'id_volunteer'=>'13',
                'id_effectiveness'=>'2',
                'Attendance_time'=>'2025-06-01 08:00:00',
                'dismissal_time'=>'2025-06-01 20:00:00',
                'hours'=>'12',
            ],
            [
                'id_volunteer'=>'14',
                'id_effectiveness'=>'3',
                'Attendance_time'=>'2025-06-01 08:00:00',
                'dismissal_time'=>'2025-06-01 20:00:00',
                'hours'=>'12',
            ],
            [
                'id_volunteer'=>'10',
                'id_effectiveness'=>'2',
                'Attendance_time'=>'2025-06-01 08:00:00',
                'dismissal_time'=>'2025-06-01 20:00:00',
                'hours'=>'12',
            ],
            [
                'id_volunteer'=>'22',
                'id_effectiveness'=>'2',
                'Attendance_time'=>'2025-06-01 08:00:00',
                'dismissal_time'=>'2025-06-01 20:00:00',
                'hours'=>'12',
            ],
            [
                'id_volunteer'=>'24',
                'id_effectiveness'=>'2',
                'Attendance_time'=>'2025-06-01 08:00:00',
                'dismissal_time'=>'2025-06-01 20:00:00',
                'hours'=>'12',
            ],
            [
                'id_volunteer'=>'17',
                'id_effectiveness'=>'2',
                'Attendance_time'=>'2025-06-01 08:00:00',
                'dismissal_time'=>'2025-06-01 20:00:00',
                'hours'=>'12',
            ],
    );
    }
}
