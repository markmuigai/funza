<?php

use App\Grade;
use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'name' => 'Pre Primary Subjects 1 (pp1)'
        ]);

        Grade::create([
            'name' => 'Pre Primary Subjects 2 (pp2)'
        ]);

        Grade::create([
            'name' => 'Grade 1'
        ]);

        Grade::create([
            'name' => 'Grade 2'
        ]);

        Grade::create([
            'name' => 'Grade 3'
        ]);

        Grade::create([
            'name' => 'Grade 4'
        ]);

        Grade::create([
            'name' => 'Grade 5'
        ]);

        Grade::create([
            'name' => 'Grade 6'
        ]);
        
        Grade::create([
            'name' => 'Grade 7'
        ]);

        Grade::create([
            'name' => 'Grade 8'
        ]);

        Grade::create([
            'name' => 'Grade 9'
        ]);

        Grade::create([
            'name' => 'Grade 10'
        ]);

        Grade::create([
            'name' => 'Grade 11'
        ]);

        Grade::create([
            'name' => 'Grade 12'
        ]);
    }
}
