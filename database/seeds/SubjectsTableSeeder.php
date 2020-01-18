<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([ 
            'name' => 'Mathematics Activities',
        ]);

        Subject::create([ 
            'name' => 'Literacy Activities or Braille Literacy Activities',
        ]);

        Subject::create([ 
            'name' => 'Kiswahili Language Activities or Kenya Sign Language (for deaf learners)',
        ]);

        Subject::create([ 
            'name' => 'English Language Activities',
        ]);

        Subject::create([ 
            'name' => 'Environmental Activities',
        ]);

        Subject::create([ 
            'name' => 'Hygiene and Nutrition Activities',
        ]);

        Subject::create([ 
            'name' => 'Religious Education Activities',
        ]);

        Subject::create([ 
            'name' => 'Movement and Creative Activities',
        ]);
    }
}
