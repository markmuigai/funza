<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            SchoolsTableSeeder::class,
            GradesTableSeeder::class,
            ClassroomsTableSeeder::class,
            SubjectsTableSeeder::class,
            TopicsTableSeeder::class,
            StudentsTableSeeder::class,
            MathematicsAssessmentRubricSeeder::class,
            LessonPlanTableSeeder::class,
            TestScoresTableSeeder::class,
            ClassScoreTableSeeder::class
            // UsersTableSeeder::class,
            // OutcomeResultsTableSeeder::class
        ]);
    }
}
 