<?php

use App\Student;
use App\Subject;
use Carbon\Carbon;
use App\OutcomeResult;
use App\StudentTotalScore;
use App\StudentStrandScore;
use App\StudentSubjectScore;
use App\StudentSubstrandScore;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestScoresTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::transaction(function (){           
			// math activities
			$subject = Subject::first();

			// Generate scores for each substrand using 
			foreach(Student::all() as $student)
			{
				foreach($subject->substrands as $substrand)
				{
					// for each assessment
					for($i = 1; $i <= $substrand->lessonPlan->assessmentCount(); $i++)
					{
						// Outcome option count
						$benchmark = generateScore(2,5,1.5,1);

						// Create an outcome result for each outcome
						foreach($substrand->outcomes as $outcome)
						{
							if((2 < $benchmark) && ($benchmark <= 3)){
								$score = 2;
							}else{
								$score = round($benchmark);
							}

							// dd(round($score));

							// fetch outcome option that matches the score
							$outcome_option_id = $outcome->outcomeOptions()->where('score', $score)->get()->first()->id;

							// Create outcome results
							$outcome_result = OutcomeResult::create([
								'student_id' => $student->id,
								'outcome_id' => $outcome->id,
								'count' => $i,
								'outcome_option_id' => $outcome_option_id 
							]);
						}
						
						/**
						 * Fetch substrand performance percentage
						 */
						// fetch the number of outcomes for the substrand
						$outcome_count = $substrand->outcomes->count();

						// Calculate the maxumum score
						$raw_substrand_score = OutcomeResult::where('student_id', $student->id)->get()->filter(function($outcome_result) use($substrand){
							return $outcome_result->outcome->substrand->id == $substrand->id; 
						})->map(function($i){
							return $i->outcomeOption->score;
						})->sum();

						$max_score = OutcomeResult::where('student_id', $student->id)->get()->filter(function($outcome_result) use($substrand){
							return $outcome_result->outcome->substrand->id == $substrand->id; 
						})->count() * 5;

						// Store scores in database
						$substrand_score = StudentSubstrandScore::create([
								'student_id' => $student->id,
								'substrand_id' => $substrand->id,
								'score' => ($raw_substrand_score/$max_score)*100
						]);

						$substrand_scores =  $substrand->strand->substrands->map(function($substrand) use($student){
							return StudentSubstrandScore::where('student_id', $student->id)->where('substrand_id', $substrand->id)->pluck('score');
						})->flatten();

						// max score attained
						$total_score = $substrand_scores->sum();

						// Check if strand has been assessed
						if($total_score !== 0){
							// max possible score
							$max_score = $substrand_scores->count()*100;
									
							// Disable timestamps
							app(StudentStrandScore::class)->timestamps = false;

							// Store scores in database
							$strand_score = $student->strandScores()->create([
									'strand_id' => $substrand->strand->id,
									'score' => ($total_score/$max_score)*100,
									'created_at' => Carbon::parse($substrand->lessonPlan->start_date)->addDays($i*3)
							]);
						}else{
							// dd($substrand_score_model->substrand->toArray());
							// dd($student->substrandScores->count(), StudentSubstrandScore::all()->count());
							// dd($substrand_scores);
							dd($substrand->strand->id);
						}

						/**
						 * Fetch subject performance 
						 */
						// strand scores
						$strand_scores =  $subject->strands->map(function($strand) use($student, $substrand){
							return StudentStrandScore::where('student_id', $student->id)->where('strand_id', $substrand->strand->id)->pluck('score');
						})->flatten();

						// max score attained
						$total_score = $strand_scores->sum();

						// Check if strand has been assessed
						if($total_score !== 0){
							// max possible score
							$max_score = $strand_scores->filter()->count()*100;

							// Disable timestamps
							app(StudentSubjectScore::class)->timestamps = false;

							// Store scores in database
							$subject_score = $student->subjectScores()->create([
								'subject_id' => $subject->id,
								'score' => ($total_score/$max_score)*100,
								'created_at' => Carbon::parse($substrand->lessonPlan->start_date)->addDays($i*3)
							]);   
						}

						/**
						 * Fetch total student score
						 */
						$subject_scores =  StudentSubjectScore::where('student_id', $student->id)->get()->pluck('score');

						// max score attained
						$total_score = $subject_scores->sum();

						// Check if strand has been assessed
						if($total_score !== 0){
							// max possible score
							$max_score = $subject_scores->filter()->count()*100;

							// Disable timestamps
							app(StudentTotalScore::class)->timestamps = false;
							
							// Store scores in database
							$total_score = $student->totalScores()->create([
								'score' => ($total_score/$max_score)*100,
								'created_at' => Carbon::parse($substrand->lessonPlan->start_date)->addDays($i*3)
							]);  
						}
					}
				}
			}
		});
	}
}
