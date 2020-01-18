<?php

use App\Grade;
use App\Classroom;
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
        $grades = Grade::all();

        // Create classrooms for every grade
        foreach($grades as $grade){
            Classroom::create([
                'grade_id' => $grade->id,
                'name' => $grade->name.'A'
            ]);

            Classroom::create([
                'grade_id' => $grade->id,
                'name' => $grade->name.'B'
            ]);

            Classroom::create([
                'grade_id' => $grade->id,
                'name' => $grade->name.'C'
            ]);

            Classroom::create([
                'grade_id' => $grade->id,
                'name' => $grade->name.'D'
            ]);
        }

    }
}
