<?php

use App\Topic;
use App\Outcome;
use Illuminate\Database\Seeder;

class OutcomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Number Concept Learning Outcomes
         */
        $topic = Topic::where('name', 'Number Concept')->first()->get();

        $topic->outcomes->create([
            'name' => 'use ordinal numbers to identify positions 1 to 20'
        ]);

        $topic->outcomes->create([
            'name' => 'state a position using ordinal numbers from one upto 10'
        ]);

        $topic = Topic::where('name', 'Whole Numbers')->first()->get();

        $topic->outcomes->create([
            'name' => 'count numbers forwards and backwards from 1 to 1000'
        ]);

        $topic->outcomes->create([
            'name' => 'identify the place value of digits in numbers upto a 1000'
        ]);

        $topic->outcomes->create([
            'name' => 'read numbers 1 to 1000 in symbols'
        ]);

        $topic->outcomes->create([
            'name' => 'read and write numbers 1 t0 100 in words'
        ]);

        $topic->outcomes->create([
            'name' => 'identify missing numbers in patterns up to 1000'
        ]);

        $topic->outcomes->create([
            'name' => 'appreciate number patterns as they skip on the numberline'
        ]);

        $topic->outcomes->create([
            'name' => 'count numbers in hundreds, tens and ones'
        ]);

        $topic->outcomes->create([
            'name' => 'count numbers from 1 to 1000 in twos and fives'
        ]);

        $topic->outcomes->create([
            'name' => 'count numbers forward and backwards from 100 to 1000 in fives and tens'
        ]);

        $topic->outcomes->create([
            'name' => 'read and write numbers in symbols'
        ]);

        $topic->outcomes->create([
            'name' => 'identify place values of numbers in thousands, hundreds, tens and ones'
        ]);

        $topic->outcomes->create([
            'name' => 'read and write numbers in words from 1 upto 100'
        ]);

        $topic->outcomes->create([
            'name' => 'identify and determine numbers in number patterns'
        ]);

        $topic->outcomes->create([
            'name' => 'create and appreciate number patterns by counting'
        ]);

        $topic->outcomes->create([
            'name' => 'count numbers forward and backward from 100 to 1000 in fives and tens'
        ]);

        /**
         * Fractions learning outcomes
         */
        $topic = Topic::where('name', 'Fractions')->first()->get();

        $topic->outcomes->create([
            'name' => 'identify fractions that are part of a whole'
        ]);

        $topic->outcomes->create([
            'name' => 'represent half of a whole'
        ]);

        $topic->outcomes->create([
            'name' => 'represent a quarter of a whole'
        ]);

        $topic->outcomes->create([
            'name' => 'represent numbers as an eighth of a whole'
        ]);

        $topic->outcomes->create([
            'name' => 'illustrate half of  a group'
        ]);

        $topic->outcomes->create([
            'name' => 'represnet an eighth of a group'
        ]);

        $topic = Topic::where('name', 'Addition')->first()->get();

        $topic->outcomes->create([
            'name' => 'add a 3 digit number to 2 digit number with single regrouping with the sum not exceeding 1000'
        ]);

        $topic->outcomes->create([
            'name' => 'add three single digit numbers with sum uptp 27 '
        ]);

        $topic->outcomes->create([
            'name' => 'add two 3 digit numbers without regrouping'
        ]);

        $topic->outcomes->create([
            'name' => 'add two 3 digit numbers with single regrouping with sum not exceeding 1000'
        ]);

        $topic->outcomes->create([
            'name' => 'work out missing numbers in patterns involving addition upto 100'
        ]);

        $topic->outcomes->create([
            'name' => 'create number patterns involving addition upto 1000'
        ]);

        $topic = Topic::where('name', 'subtraction')->first()->get();

        $topic->outcomes->create([
            'name' => 'subtract up to 3 digit numbers with single regrouping'
        ]);
        
        $topic->outcomes->create([
            'name' => 'subtract up to 3 digit numbers involving missing numbers without regrouping'
        ]);

        $topic->outcomes->create([
            'name' => 'work out missing numbers in number patterns involving subtraction up to 1000'
        ]);

        $topic = Topic::where('name', 'multiplication')->first()->get();

        $topic->outcomes->create([
            'name' => 'multiply single digit numbers by 1'
        ]);

        $topic->outcomes->create([
            'name' => 'multiply single digit numbers by 2'
        ]);

        $topic->outcomes->create([
            'name' => 'multiply single digit numbers by 3'
        ]);

        $topic->outcomes->create([
            'name' => 'multiply single digit numbers by 4'
        ]);

        $topic->outcomes->create([
            'name' => 'multiply single digit numbers by 5'
        ]);

        $topic = Topic::where('name', '')->first()->get();

        $topic->outcomes->create([
            'name' => 'multiply single digit numbers by 6'
        ]);

        $topic->outcomes->create([
            'name' => 'multiply single digit numbers by 7'
        ]);

        $topic->outcomes->create([
            'name' => 'multiply single digit numbers by 8'
        ]);

        $topic->outcomes->create([
            'name' => 'multiply single digit numbers by 9'
        ]);

        $topic->outcomes->create([
            'name' => 'multiply single digit numbers by 10'
        ]);

        $topic = Topic::where('name', 'Division')->first()->get();

        $topic->outcomes->create([
            'name' => 'represent division as equal sharing'
        ]);

        $topic->outcomes->create([
            'name' => 'represent division as equal grouping'
        ]);

        $topic->outcomes->create([
            'name' => 'use division sign in writing division sentences'
        ]);

        $topic->outcomes->create([
            'name' => 'divide numbers upto 25 by 2,3,4,5 without a remainder in real life situations'
        ]);

        $topic = Topic::where('name', 'Length')->first()->get();

        $topic->outcomes->create([
            'name' => 'measure length of different objects in meters'
        ]);

        $topic->outcomes->create([
            'name' => 'perform addition of lengths in metres'
        ]);

        $topic->outcomes->create([
            'name' => 'solve word problems involving addition in lengths'
        ]);

        $topic->outcomes->create([
            'name' => 'subtract length in metres'
        ]);

        $topic->outcomes->create([
            'name' => 'solve word problems involving subtraction of length in metres'
        ]);

        $topic->outcomes->create([
            'name' => 'estimate lengths'
        ]);

        $topic = Topic::where('name', 'Mass')->first()->get();

        $topic->outcomes->create([
            'name' => 'weigh mass of objects in kilograms'
        ]);

        $topic->outcomes->create([
            'name' => 'make 1 kg masses'
        ]);

        $topic->outcomes->create([
            'name' => 'add mass in kg'
        ]);

        $topic->outcomes->create([
            'name' => 'subtract mass in kgs'
        ]);

        $topic->outcomes->create([
            'name' => 'estimate mass of an object'
        ]);
        
        $topic = Topic::where('name', 'Capacity')->first()->get();


        $topic->outcomes->create([
            'name' => 'measure capacity in litres'
        ]);

        $topic->outcomes->create([
            'name' => 'add capacity in litres'
        ]);

        $topic->outcomes->create([
            'name' => 'work out subtraction involving capacity in litres'
        ]);

        $topic->outcomes->create([
            'name' => 'estimate capacity in litres upto 5 litres'
        ]);

        $topic = Topic::where('name', 'Time')->first()->get();

        
        $topic->outcomes->create([
            'name' => 'identify units as a unit of time'
        ]);

        $topic->outcomes->create([
            'name' => 'tell that 15 minutes is a quarter way around the clock face in the clockwise direction'
        ]);

        $topic->outcomes->create([
            'name' => 'tell time as half past the hour'
        ]);

        $topic->outcomes->create([
            'name' => 'write time in terms of minutes to and minutes past'
        ]);

        $topic->outcomes->create([
            'name' => 'estimate time in hours'
        ]);

        $topic->outcomes->create([
            'name' => 'do addition involving time'
        ]);

        $topic->outcomes->create([
            'name' => 'work out subtraction questions involving time '
        ]);

        $topic = Topic::where('name', 'Money')->first()->get();


        $topic->outcomes->create([
            'name' => 'identify kenyan money'
        ]);

        $topic->outcomes->create([
            'name' => 'count money in different denomination of the Kenyan currency'
        ]);

        $topic->outcomes->create([
            'name' => 'work out the addition of money'
        ]);

        $topic->outcomes->create([
            'name' => 'work out the subtraction of money'
        ]);

        $topic->outcomes->create([
            'name' => 'explain how buying and selling takes place'
        ]);

        $topic->outcomes->create([
            'name' => 'understand how to do shopping'
        ]);

        $topic->outcomes->create([
            'name' => 'differentiate between needs and wants'
        ]);

        $topic = Topic::where('name', 'Position and Direction')->first()->get();

        $topic->outcomes->create([
            'name' => 'draw straight lines'
        ]);

        $topic->outcomes->create([
            'name' => 'move along a straight line from a point'
        ]);

        $topic->outcomes->create([
            'name' => 'turn to the right from a point'
        ]);

        $topic->outcomes->create([
            'name' => 'turn to the left from a point'
        ]);

        $topic = Topic::where('name', 'Shapes')->first()->get();

        $topic->outcomes->create([
            'name' => 'sort and group shapes'
        ]);

        $topic->outcomes->create([
            'name' => 'make a circle'
        ]);

        $topic->outcomes->create([
            'name' => 'make patterns using shapes'
        ]);
    }
}
