<?php

use App\Student;
use App\Subject;
use App\StudentStrandScore;
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
				// Generate normal distribution scores
				$benchmark = generateScore(40,100,12,1);

				foreach($subject->substrands as $substrand)
				{
					// Score to be a random number in the range of the first assessment
					$score = rand(($benchmark-8), ($benchmark+8));

					// Create score
					$substrand_score_model = $student->substrandScores()->create([
							'substrand_id' => $substrand->id,
							'score' => $score
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
								
						// Store scores in database
						$strand_score = $student->strandScores()->create([
								'strand_id' => $substrand->strand->id,
								'score' => ($total_score/$max_score)*100
						]);
					}else{
						// dd($substrand_score_model->substrand->toArray());
						// dd($student->substrandScores->count(), StudentSubstrandScore::all()->count());
						// dd($substrand_scores);
						dd($substrand->strand->id);
					}
				}

				// dd(StudentStrandScore::all()->toArray());

			}
		});
	}
}
