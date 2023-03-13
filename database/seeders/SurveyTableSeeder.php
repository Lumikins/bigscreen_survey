<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Survey;

class SurveyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create data in the survey table
        Survey::create([
            'survey' => 'My bigscreen survey',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
