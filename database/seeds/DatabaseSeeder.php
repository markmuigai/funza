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
            // UsersTableSeeder::class,
            // SubjectsTableSeeder::class,
            // TopicsTableSeeder::class,
            // OutcomesTableSeeder::class,
            // GradesTableSeeder::class,
            // ClassroomsTableSeeder::class,
            // StudentsTableSeeder::class,
            // OutcomeResultsTableSeeder::class
        ]);
    }
}
