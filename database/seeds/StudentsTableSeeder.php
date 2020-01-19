<?php

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
        $classroom = Classroom::where('name', '3A')->get()->first();

        /**
         * 20 Students 
         */
        for($i=0; $i<20; $i++)
        {
            $firstname = $faker->firstname;
            $lastname = $kenyan_names[array_rand($kenyan_names)];
            $student = Student::create([
                'name' => $firstname.' '.$lastname,
                'classroom_id' => $classroom->id
            ]);
        }
    }
}
