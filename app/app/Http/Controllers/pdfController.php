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

        $name = "Shishir Bhuiyan";
        $email = "Shishir@gmail.com";
        // data should be pass as an array
        // $pdf = Pdf::loadView('hellopdf',compact('data')); OR pass by key value array pair
        $pdf = Pdf::loadView('hellopdf',['name'=>$name,'email'=>$email]);
        return $pdf->download('laravels'.time().'.pdf');
    }
}
