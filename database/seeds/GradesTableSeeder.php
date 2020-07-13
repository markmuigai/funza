<?php

use App\Grade;
use App\School;
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
        // Fetch school
        $school = School::first();

        $grade = Grade::create([
            'name' => 'Pre Primary Subjects 1 (pp1)'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => 'Pre Primary Subjects 2 (pp2)'
        ]);

        $grade = Grade::create([
            'name' => '1'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => '2'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => '3'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => '4'
        ]);
        
        // Attach to school
        $school->grades()->attach($grade->id);

        // Fetch all subjects
        $subjects = Subject::all();
        
        // Assign subjects for grade 4
        foreach($subjects as $subject){
            $grade->subjects()->attach($subject->id);
        }

        $grade = Grade::create([
            'name' => '5'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => '6'
        ]);
        
        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => '7'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => '8'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => '9'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => '10'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => '11'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);

        $grade = Grade::create([
            'name' => '12'
        ]);

        // Attach to school
        $school->grades()->attach($grade->id);
    }
}
