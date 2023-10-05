<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'subject_code' => '123',
            'subject_description' => 'english 2',
            'subject_unit' => '3',
            'prerequisite' => 'english 1',
        ]);

        Subject::create([
            'subject_code' => '112323',
            'subject_description' => 'math 2',
            'subject_unit' => '3',
            'prerequisite' => 'math 1',
        ]);

        Subject::create([
            'subject_code' => '5123',
            'subject_description' => 'filipino 2',
            'subject_unit' => '3',
            'prerequisite' => 'filipino 1',
        ]);
    }
}
