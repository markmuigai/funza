<?php

namespace App\Imports;

use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;

class TeachersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            if($row[0]!==null){
                $teacher = User::create([
                    'name' => $row[0],
                    'email'    => $row[1], 
                    'password' => Hash::make('secret'),
                ]);
    
                // Fetch auth user's school
                $school = auth()->user()->schools->first();
    
                // Store subjects they can teach
                // $teacher->subjects()->attach($request->subjects);
    
                // Assign user to school    
                $school->users()->attach($teacher->id);
    
                // Assign school admin role to the pivot table instances of the users selected
                $teacher->schoolAdministration($school)->roles()->attach(Role::where('name','teacher')->first()->id);
            }
        }
    }
}
