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
        $kenyan_names = ['Kabiga',
        'Kagika',
        'Kamais',
        'Kamathi',
        'Kamau',
        'Kamworor',
        'Kandie',
        'Kaptich',
        'Karoki',
        'Chemutai',
        'Chenonge',
        'Chepchirchir',
        'Chepkemei',
        'Chepkesis',
        'Cheptais',
        'Chepyego',
        'Gitahi',
        'Gwako',
        'Ndungu',
        'Ngugi',
        'Njenga',
        'Njeri',
        'Nyambura',
        'Wacera',
        'Wairimu',
        'Waithaka',
        'Wambui',
        'Wangari',
        'Wangui',
        'Wanjiku',
        'Wanjiru',
        'Waweru'];
    
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
         * 20 Students 
         */
        for($i=0; $i<20; $i++)
        {
            $firstname = $faker->firstname;
            $lastname = $kenyan_names[array_rand($kenyan_names)];
            $user = User::create([
                'name' => $firstname.' '.$lastname,
                'email' => $firstname.$lastname.'@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('secret')
            ]);

            //assign role
            $user->assignRole('student');
        }
    }   
}
