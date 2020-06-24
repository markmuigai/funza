<?php

use Carbon\Carbon;
use App\Substrand;
// use App\TermDates;
use App\LessonPlan;
use Carbon\CarbonPeriod;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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

        function generateDates($start_date, $end_date)
        {
            $period = CarbonPeriod::create($start_date, $end_date);

            // Initialize dates array
            $term_days = [];

            // Iterate over the period
            foreach ($period as $date) {
                if($date->isWeekday()){
                    array_push($term_days, $date->format('Y-m-d'));
                }
            }

            return $term_days;
        }

        // Term 1
        $term_1_dates = generateDates($term1_start_date, $term1_end_date);

        // Term 2
        $term_2_dates = generateDates($term2_start_date, $term2_end_date);

        // Term 3
        $term_3_dates = generateDates($term3_start_date, $term3_end_date);
        
        // Create all year dates array
        $all_dates = array_merge($term_1_dates, $term_2_dates, $term_3_dates);

        // First iteration start date
        $start_date = $all_dates[0];

        // for each strand
        foreach($lesson_plans as $strands => $substrands)
        {
            foreach($substrands as $substrand => $lesson_count)
            {   
                // Calculate assessment deadline
                // $deadline = $start_date + $lesson_count + weekend days;
                $deadline = $all_dates[array_search($start_date, $all_dates) + $lesson_count];

                try
                {
                    // Fetch substrand
                    $substrand = Substrand::where('name', $substrand)->get()->first();
                }
                // catch(Exception $e) catch any exception
                catch(ModelNotFoundException $e)
                {
                    dd($substrand);

                }

                // Create lesson plan
                $lesson_plan = LessonPlan::create([
                    'substrand_id' => $substrand->id,
                    'lesson_count' => $lesson_count,
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
                $start_date = $deadline;
            }
        }

    }

}
