<?php

use App\Grade;
use App\Subject;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'name' => 'Pre Primary Subjects 1 (pp1)'
        ]);

        Grade::create([
            'name' => 'Pre Primary Subjects 2 (pp2)'
        ]);

        Grade::create([
            'name' => '1'
        ]);

        Grade::create([
            'name' => '2'
        ]);

        $grade = Grade::create([
            'name' => '3'
        ]);

        // Fetch all subjects
        $subjects = Subject::all();
        
        // Assign subjects for grade 3
        foreach($subjects as $subject){
            $grade->subjects()->attach($subject->id);
        }

        Grade::create([
            'name' => '4'
        ]);

        Grade::create([
            'name' => '5'
        ]);

        Grade::create([
            'name' => '6'
        ]);
        
        Grade::create([
            'name' => '7'
        ]);

        Grade::create([
            'name' => '8'
        ]);

        Grade::create([
            'name' => '9'
        ]);

        Grade::create([
            'name' => '10'
        ]);

        Grade::create([
            'name' => '11'
        ]);

        Grade::create([
            'name' => '12'
        ]);
    }
}
