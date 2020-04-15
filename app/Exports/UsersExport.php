<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromArray, WithMapping, WithHeadings
{

    protected $teachers;

    public function __construct($teachers)
    {
        $this->teachers = $teachers;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        return $this->teachers;
    }

    /**
     * Specifiy row headings
     */
    public function headings(): array
    {
        return [
            'User Name',
            'Email',
        ];
    }

    /**
     * Map columns
     */
    public function map($teacher): array
    {
        return [
            $teacher['name'],
            $teacher['email']
        ];
    }
}
