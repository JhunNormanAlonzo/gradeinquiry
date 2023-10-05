<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            [
                'name' => 'Admin',
                'email' => 'occ.bsit.admin@gmail.com',
                'password' => hash::make("admin123"),

            ],
            [
                'name' => 'faculty',
                'email' => 'occ.bsit.faculty@gmail.com',
                'password' => hash::make("faculty123"),
            ],

            [
                'name' => 'student',
                'email' => 'occ.bsit.student@gmail.com',
                'password' => hash::make("student123"),
            ],
        ]);
    }
}
