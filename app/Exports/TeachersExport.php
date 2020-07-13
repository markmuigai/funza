<?php

namespace App\Exports;

use App\School;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TeachersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return School::first()->teachers();
    }

    /**
    * @var Teacher $teacher
    */
    public function map($teacher): array
    {
        return [
            $teacher->name,
            $teacher->email,
        ];
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
        ];
    }
}
