<?php

use Carbon\Carbon;
use App\Substrand;
// use App\TermDates;
use App\LessonPlan;
use Illuminate\Database\Seeder;

class LessonPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get the predefined lesson_plans, json file
        $lesson_plans = json_decode(file_get_contents(
            database_path('lesson_plan.json')
        ));

        // Set starting date of academic year
        // Term 1
        $term1_start_date = Carbon::parse('1/3/2020');
        $term1_end_date = Carbon::parse('3/28/2020'); 

        // Term 2
        $term2_start_date = Carbon::parse('5/3/2020');
        $term2_end_date = Carbon::parse('7/28/2020'); 

        // Term 3
        $term3_start_date = Carbon::parse('9/3/2020');
        $term3_end_date = Carbon::parse('11/28/2020');

        // First iteration start date
        $start_date = $term1_start_date;
        // for each strand
        foreach($lesson_plans as $strands => $substrands)
        {
            foreach($substrands as $substrand => $lesson_count)
            {
                // Select starting date to consider long holidays
                // Check if starting date is less than term 1, if more, starting date becomes term2/starting date
                if($start_date > $term1_end_date && $start_date < $term2_start_date){
                    // Fetch new starting date in the next term
                    $start_date = $term2_start_date;
                }elseif($start_date > $term2_end_date && $start_date < $term3_start_date){
                    $start_date = $term3_start_date;
                }

                // Days to add to consider weekends
                if($lesson_count <= 5){
                    $weekend_days = 0;
                }else{
                    // Divide by 7 to get the weekends
                    // Multiply by 2 to get the day count 
                    $weekend_days = floor($lesson_count/7)*2;
                }

                // new start date, wont work without this lol
                // $temp_start_date = $start_date;

                // Calculate assessment deadline
                // $deadline = $start_date + $lesson_count + weekend days;
                $deadline = $start_date->copy()->addDays($lesson_count + $weekend_days);
                // dd($deadline);

                // dd($start_date,$deadline);
                

                // Fetch substrand
                $substrand = Substrand::where('name', $substrand)->first();

                // Create lesson plan
                $lesson_plan = LessonPlan::create([
                    'substrand_id' => 1,
                    'start_date' => $start_date,
                    'end_date' => $deadline,
                    'status' => 'pending',
                    // 'started_on' => ,
                    // 'ended_at' => ,
                    // 'complete' => 
                ]);

                // dd($lesson_plan->toArray());

                // Calculate new starting date
                // $start_date = $deadline + $one_day;
                $start_date = $deadline->addDays(1);
            }
        }

    }

}
