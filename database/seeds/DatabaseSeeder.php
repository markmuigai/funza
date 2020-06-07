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
            SubjectsTableSeeder::class,
            TopicsTableSeeder::class,
            GradesTableSeeder::class,
            ClassroomsTableSeeder::class,
            StudentsTableSeeder::class,
            MathematicsAssessmentRubricSeeder::class,
            // LessonPlanTableSeeder::class
            // UsersTableSeeder::class,
            // OutcomeResultsTableSeeder::class
        ]);
    }
}
 