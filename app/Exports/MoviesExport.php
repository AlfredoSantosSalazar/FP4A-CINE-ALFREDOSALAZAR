<?php

namespace App\Exports;

use App\Movies;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class MoviesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $consumables = DB::table('consumables')->select('id', 'name',
        'synopsis',
        'category',
        'director',
        'duration',
        'actors',
        'gender')->get();
        return $consumables;
            }
public function headings():array{
    return [
        'ID',
        'NOMBRE',
        'SINOPSIS',
        'CATEGORIA',
        'DIRECTOR',
        'DURACION',
        'ACTOR',
        'GENERO'
    ];
}
}