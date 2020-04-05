<?php

use App\User;
use App\School;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class SchoolsTableSeeder extends Seeder
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
        
        // Create School
        $school = School::create([
            'name' => 'Precious Blood Academy',
            'address' => 'Kenyatta Road, Church View Estate',
            'email' => 'info@preciousacademy.co.ke',
            'telno' => '+254712345678',
            'telno2' => '+254712345678',
            'address2' => 'alt_address',
            'county' => 'Nairobi',
            'subcounty' => 'nairobi'
        ]);

        // Create school admin account
        $school_admin = User::create([
            'name' => $school->name.' admin',
            'email' => $school->email,
            'password' => Hash::make('secret'),
        ]);

        // Assign user to school    
        $school->users()->attach($school_admin->id);

        // Assign school admin role to the pivot table instances of the users selected
        $school_admin->schoolAdministration($school)->roles()->attach(Role::where('name','school_admin')->first()->id);
    }
}
