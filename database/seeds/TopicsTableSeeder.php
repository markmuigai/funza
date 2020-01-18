<?php

use App\Topic;
use App\Subject;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = Subject::where('name', 'Mathematics Activities')->first()->get();
        
        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Number Concept'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Whole Numbers'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Fractions'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Addition'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Subtraction'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Multiplication'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Division'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Length'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Mass'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Capacity'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Time'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Money'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Position and Direction'
        ]);

        Topic::create([
            'subject_id' => $subject->id,
            'name' => 'Shapes'
        ]);

        
    }
}
