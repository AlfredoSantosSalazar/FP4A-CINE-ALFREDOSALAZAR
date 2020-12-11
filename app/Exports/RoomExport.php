<?php

namespace App\Exports;

use App\Room;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class RoomExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $consumables = DB::table('consumables')->select('chairs', 'location', 'capacy')->get();
        return $consumables;
            }
public function headings():array{
    return [
        'SILLA',
        'LOCALIZACION',
        'CAPACIDAD'
    ];
}
}
