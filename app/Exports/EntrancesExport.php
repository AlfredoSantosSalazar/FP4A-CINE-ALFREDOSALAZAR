<?php

namespace App\Exports;

use App\Entrances;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class EntrancesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $consumables = DB::table('consumables')->select('id', 'name',
        'sala',
        'prince',
        'hourEntrance')->get();
        return $consumables;
            }
public function headings():array{
    return [
        'ID',
        'NOMBRE',
        'SALA',
        'PRECIO',
        'HORAENTRADA'
    ];
}
}