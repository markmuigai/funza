<?php

use App\Strand;
use App\Subject;
use App\Substrand;
use Illuminate\Database\Seeder;

class MathematicsAssessmentRubricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fetch Subject
        $subject = Subject::where('name', 'Mathematics Activities')->first();

        // Get the predefined strands, substrand and outcomes from the included
        // .json file
        $strands = json_decode(file_get_contents(
            database_path('mathematics_assessment_rubric.json')
        ));

         /**
         * Loop through the .json object and get each key value pair.
         * For the first level, the key is the substrand name and the value is an array of
         * permissions.
         */
        foreach($strands as $strand => $substrands)
        {
            // First level, create roles
            $strand = $subject->strands()->create(['name' => $strand]);

            // Loop through all strands
            foreach ($substrands as $substrand => $outcomes) {
                // Create a new permission or update an existing one
                $substrand = $strand->substrands()->updateOrCreate(
                    ['name' => $substrand], ['name' => $substrand]
                );

                // Loop through all outcomes
                foreach($outcomes as $outcome => $outcomeOptions){
                    // Create outcome
                    $outcome = $substrand->outcomes()->create([
                        'name' => $outcome
                    ]);

                    // Outcome option counter
                    $outcome_option_count = 1;

                    // Loop through all substrands
                    foreach ($outcomeOptions as $outcomeOption) {
                        // Calculate score
                        switch ($outcome_option_count) {
                            case 1:
                                $score = 5;
                                break;
                            case 2:
                                $score = 4;
                                break;
                            case 3:
                                $score = 2.5;
                                break;
                            case 4:
                                $score = 1;
                                break;
                        }

                        // Create outcome option
                        $outcome->outcomeOptions()->updateOrCreate(
                            ['name' => $outcomeOption],
                            [
                                'name' => $outcomeOption,
                                'score' => $score
                            ]
                        );

                        // Increment
                        $outcome_option_count++;
                    }
                }
                
            }
        }

    }
}
