<?php

namespace App\Exports;

use App\Models\RegistredUsers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RegistredExport implements FromCollection,WithMapping, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RegistredUsers::all();
    }

    /**
     * Map the data for each row.
     */
    public function map($row): array
    {
        return [
            $row->id,
            $row->name,
            $row->phone." ",
        ];
    }


    public function headings(): array
    {
        return ["Идентификатор", "Имя", "Номер"];

    }
}
