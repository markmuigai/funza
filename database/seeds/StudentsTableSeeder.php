<?php

use App\School;
use App\Student;
use App\Classroom;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
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

        // Fecth class 3A
        $classroom = Classroom::where('name', '4A')->get()->first();

        /**
         * 20 Students 
         */
        for($i=0; $i<20; $i++)
        {
            $firstname = $faker->firstname;
            $lastname = $kenyan_names[array_rand($kenyan_names)];
            $student = Student::create([
                'name' => $firstname.' '.$lastname,
                'telno' => '0712345678',
                'address' => 'Mwakinda Lane, Kiambaa'
            ]);

            // Assign to school
            School::first()->students()->attach($student->id);

            // Assign to classroom 
            $classroom->students()->attach($student->id, ['status' => true]);
        }
    }
}
