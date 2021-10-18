<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    // Generate PDF
    public function createPDF()
    {
        // return view('api.pdf.payment-receipt');
        $pdf = PDF::loadView('pdf');

        // download PDF file with download method
        return $pdf->stream('pdf_file.pdf');
    }
}
