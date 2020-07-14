<?php

namespace App\Imports;

use App\Student;
use App\StudentParent;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;

class StudentsImport implements ToCollection
{
    public function  __construct($classroom)
    {
        $this->classroom= $classroom;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            if($row[0]!==null && $row !== $rows[0]){
                $student = Student::create([
                    'name' => $row[0],
                    'telno' => $row[1],
                    'address' => $row[2]
                ]);
    
                // Fetch auth user's school
                $school = auth()->user()->schools->first();
    
                // Store subjects they can teach
                // $teacher->subjects()->attach($request->subjects);
    
                // Assign user to school    
                $school->students()->attach($student->id);

                // Assign school admin role to the pivot table instances of the users selected
                $this->classroom->students()->attach($student->id, ['status' => true]);

                // Create Parent accounts
                $parent = StudentParent::create([
                    'student_id' => $student->id,
                    'name' => $row[3],
                    'email' => $row[4]
                ]);
            }
        }
    }
}
