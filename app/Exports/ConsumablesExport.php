<?php

namespace App\Exports;

use App\Consumables;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;


class ConsumablesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $consumables = DB::table('consumables')->select('id', 'name','price', 'quantity')->get();
        return $consumables;
            }
public function headings():array{
    return [
        'ID',
        'NOMBRRE',
        'PRECIO',
        'CANTIDAD'
    ];
}
}
