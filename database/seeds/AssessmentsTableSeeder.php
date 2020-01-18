<?php

use Illuminate\Database\Seeder;

class AssessmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Topics
        $strands = ['numbers', 'measurement', 'geometry'];
        // Subtopics equivalent
        $substrands = ['number concept', 'whole_numbers', 'fractions', 'addition', 'subtraction',
         'multiplication', 'division', 'length', 'mass', 'capacity', 'time', 'money', 'position_and_direction', 'shapes'];

        //  Fo

        // Number concept
        // 8 lessons
        // Assessment 
        Assessment::Create([
            'name' => '',
            'score'=>  ''
        ]);

    }
}
