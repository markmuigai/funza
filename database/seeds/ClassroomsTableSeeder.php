<?php

use App\Classroom;
use App\GradeSchool;
use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Create classrooms for grades
         */
        $gradeSchools = GradeSchool::all();

        // Create classrooms for every instance of grade classroom
        foreach($gradeSchools as $gradeSchool){
            Classroom::create([
                'grade_school_id' => $gradeSchool->id,
                'name' => $gradeSchool->grade->name.'A'
            ]);

            Classroom::create([
                'grade_school_id' => $gradeSchool->id,
                'name' => $gradeSchool->grade->name.'B'
            ]);

            Classroom::create([
                'grade_school_id' => $gradeSchool->id,
                'name' => $gradeSchool->grade->name.'C'
            ]);

            Classroom::create([
                'grade_school_id' => $gradeSchool->id,
                'name' => $gradeSchool->grade->name.'D'
            ]);
        }

    }
}
