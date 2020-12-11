<?php

namespace App\Exports;

use App\Functions;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class FunctionsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $consumables = DB::table('consumables')->select('id', 'nombre',
        'start',
        'end',
        'available',
        'type')->get();
        return $consumables;
            }
public function headings():array{
    return [
        'ID',
        'NOMBRE',
        'INICIO',
        'FIN',
        'CARACTERISTICA',
        'TIPO'
    ];
}
}
