<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
        [
            'name' => 'ali',
            'email'=>'ali@gmail.com',
            'email_verified_at'=>'12345',
            'password' => Hash::make('12345'),
            'role' => 'manager',
            'status' => true,

        ],
        [
            'name' => 'mohemmed',
            'email'=>'mohammed@gmail.com',
            'email_verified_at'=>'12345',
            'password' => Hash::make('1234567'),
            'role' => 'admin',
            'status' => true,
        ],
        [
            'name' => 'rami',
            'email'=>'ramigmail.com',
            'email_verified_at'=>'12345',
            'password' => Hash::make('12345678'),
            'role' => 'manager',
            'status' => true,
        ],
        [
            'name' => 'reem',
            'email'=>'reem@gmail.com',
            'email_verified_at'=>'12345',
            'password' => Hash::make('123456784'),
            'role' => 'admin',
            'status' => true,
        ],
        [
            'name' => 'hala',
            'email'=>'hala@gmail.com',
            'email_verified_at'=>'12345',
            'password' => Hash::make('1234567890'),
            'role' => 'manager',
            'status' => true,
        ]

    );
    }
}
