<?php

use App\Topic;
use App\Outcome;
use App\Student;
use App\Subject;
use Illuminate\Database\Seeder;

class OutcomeResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fetch the first 3 mathematical activities topics
        $topics = Subject::first()->topics()->limit(3)->get();

        // Fetch all students
        $students = Student::all();

        // Possible outcome result
        $results = ['weak', 'average', 'good' ,'outstanding'];

        // Foreach outcomes of the topics
        foreach($topics as $topic){
            // Fetch topic outcomes
            $outcomes = $topic->outcomes;

            // Foreach outcome
            foreach($outcomes as $outcome)
            {
                // foreach student
                foreach($students as $student){
                    // Create an outcome result for every student 
                    $outcome->outcomeResults()->create([
                        'student_id' => $student->id,
                        'outcome_id' => $outcome->id,
                        'result' => $results[array_rand($results)]
                    ]);
                }
            }
        }
    }
}


