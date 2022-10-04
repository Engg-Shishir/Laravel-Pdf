<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

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

        // unique pdf name
        $pdfName = 'pdfFolder/laravel_'.Str::random('10').'.pdf';

        // Save specific folder also download
        // return Pdf::loadView('hellopdf',['name'=>$name,'email'=>$email])->save(public_path($pdfName))->download($pdfName);
        
        // Just save in specific folder
        Pdf::loadView('hellopdf',['name'=>$name,'email'=>$email])->save(public_path($pdfName));

    }

    function small(){

        $name = "Shishir Bhuiyan";
        $email = "Shishir@gmail.com";

        // unique pdf name
        $pdfName = 'pdfFolder/small_'.Str::random('10').'.pdf';

        // Just save in specific folder
        Pdf::loadView('small',['name'=>$name,'email'=>$email])->save(public_path($pdfName));

    }

    function pdf(){

        $name = "Shishir Bhuiyan";
        $email = "Shishir@gmail.com";

        // unique pdf name
        $pdfName = 'pdfFolder/pdf_'.Str::random('10').'.pdf';

        // Just save in specific folder
        Pdf::loadView('pdf',['name'=>$name,'email'=>$email])->save(public_path($pdfName));

    }
}
