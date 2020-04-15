<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExportTemplate implements FromArray, WithHeadings
{
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
    * @return \Illuminate\Support\Array
    */
    public function array(): array
    {
        return [];
    }
}
