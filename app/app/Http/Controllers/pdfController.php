<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class pdfController extends Controller
{
    
    function index(){
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();

        $data = "Shishir Bhuiyan";

        $pdf = Pdf::loadView('hellopdf');
        return $pdf->download('invoice.pdf');
    }
}
