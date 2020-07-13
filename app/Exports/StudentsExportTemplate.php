<?php

namespace App\Exports;

use App\User;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentsExportTemplate implements FromArray, WithHeadings
{
    /**
     * Specifiy row headings
     */
    public function headings(): array
    {
        return [
            'Student Name',
            'telno',
            'address',
            'Guardian name',
            'Guardian Email'
        ];
    }

    /**
    * @return \Illuminate\Support\Array
    */
    public function array(): array
    {
        return [];
    }
}
