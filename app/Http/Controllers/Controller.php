<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Barryvdh\DomPDF\Facade as PDF; 

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function imprimir(){
        $pdf = PDF::loadView('pdf');
        return $pdf->stream('WelcomePDF.pdf');
    }
}
