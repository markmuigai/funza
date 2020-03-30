<?php

use App\User;
use App\Subject;
use App\Classroom;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /**
         * Teacher
         */
        $user = User::create([
            'name' => 'Mark Muigai',
            'email' => 'mark@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret')
        ]);

        //assign role
        $user->assignRole('teacher');

        // Find classroom 3A
        $classroom = Classroom::where('name', '3A')->get()->first();

        // Find mathematics activities
        $subject = Subject::where('name', 'Mathematics Activities')->get()->first();

        // Assign grade and subject pivot instance to a teacher
        $user->classroomSubject()->create([
            'classroom_id' => $classroom->id,
            'subject_id' => $subject->id
        ]);

        /**
         * School Admin
         */
        $user = User::create([
            'name' => 'School Admin',
            'email' => 'luffy@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret')
        ]);

        //assign role
        $user->assignRole('school_admin');

    }   
}
