<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;



class PDFController extends Controller
{
    //
    public function PDFgenerate()
    {
        $pdf = PDF::loadView('RealProgrammer');
        // $pdf->setSourceFile("marksheet.pdf");

  
        return $pdf->download('RealProgrammer.pdf');
    }
}
