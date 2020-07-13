<?php

use App\Student;
use App\Subject;
use App\Classroom;
use App\Substrand;
use Carbon\Carbon;
use App\OutcomeResult;
use App\StudentStrandScore;
use App\StudentSubjectScore;
use App\ClassroomStrandScore;
use App\ClassroomSubjectScore;
use App\StudentSubstrandScore;
use Illuminate\Database\Seeder;
use App\ClassroomSubstrandScore;
use Illuminate\Support\Facades\DB;

class ClassScoreTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Select class 4
		$classroom = Classroom::where('name', '4A')->get()->first();

		$assessmentCounts = collect();

		// Get number of assessments made for each substrand 
		foreach(Subject::first()->substrands as $substrand)
		{
			$assessmentCount = Student::first()->substrandScores->where('substrand_id', $substrand->id)->count();

			// Save in collection
			$assessmentCounts->put($substrand->id, $assessmentCount);
		}

		// Loop through each substrand saving the scores
		foreach($assessmentCounts as $substrandId => $assessmentCount)
		{
			$substrand = Substrand::find($substrandId);
			
			for($i=1; $i<=$assessmentCount; $i++)
			{
				/**
				 * Substrand Score
				 */
				$substrand_score = $classroom->currentStudents()->map(function($student) use($i,$substrandId){
					return $student->substrandScores()->where('substrand_id', $substrandId)->take($i)->get()->pluck('score');
				})->flatten()->sum();
				
				app(ClassroomSubstrandScore::class)->timestamps = false;
				$ClassroomSubstrandScore = $classroom->substrandScores()->create([
					'substrand_id' => $substrandId,
					'score' => ($substrand_score/($classroom->currentStudents()->count()*100*$i))*100,
					'created_at' => Carbon::parse($substrand->lessonPlan->start_date)->addDays($i*3)
				]);

				/**
				 * Strand Score
				 */
				$strand_score = $classroom->currentStudents()->map(function($student) use($i,$substrand){
					return $student->strandScores()->where('strand_id', $substrand->strand->id)->take($i)->get()->pluck('score');
				})->flatten()->sum();
				
				app(ClassroomStrandScore::class)->timestamps = false;
				$ClassroomStrandScore = $classroom->strandScores()->create([
					'strand_id' => $substrand->strand->id,
					'score' => ($strand_score/($classroom->currentStudents()->count()*100*$i))*100,
					'created_at' => Carbon::parse($substrand->lessonPlan->start_date)->addDays($i*3)
				]);

				/**
				 * Subject score
				 */
				$subject_score = $classroom->currentStudents()->map(function($student) use($i,$substrand){
					return $student->subjectScores()->where('subject_id', $substrand->strand->subject->id)->take($i)->get()->pluck('score');
				})->flatten()->sum();
				
				app(ClassroomSubjectScore::class)->timestamps = false;
				$ClassroomSubjectScore = $classroom->subjectScores()->create([
					'subject_id' => $substrand->strand->subject->id,
					'score' => ($subject_score/($classroom->currentStudents()->count()*100*$i))*100,
					'created_at' => Carbon::parse($substrand->lessonPlan->start_date)->addDays($i*3)
				]);
			}
		}
	}
}