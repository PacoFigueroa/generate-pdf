<?php

namespace App\Http\Controllers;

use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    // Generate PDF
    public function createPDF()
    {
        $data = [
            'payment' => [
                [
                    'transaction_id' => 'TRN-KF99-MA9J',
                    'tin' => '2352344433',
                    'amount' => 'k32,300.50',
                    'comment' => 'Augut 2021 GST tax comment',
                    'type' => 'Goods and Service Tax',
                    'year' => '2021',
                    'month' => 'September',
                    'assessment_number' => '485982'
                ],
                [
                    'transaction_id' => 'TRN-KF99-MA9J',
                    'tin' => '2352344433',
                    'amount' => 'k32,300.50',
                    'comment' => 'n/a',
                    'type' => 'Goods and Service Tax',
                    'year' => '2021',
                    'month' => 'September',
                    'assessment_number' => '485982'
                ],
                [
                    'transaction_id' => 'TRN-KF99-MA9J',
                    'tin' => '2352344433',
                    'amount' => 'k32,300.50',
                    'comment' => 'n/a',
                    'type' => 'Goods and Service Tax',
                    'year' => 'n/a',
                    'month' => '',
                    'assessment_number' => '485982'
                ]
            ],
            'email_to' => 'john.citizen@gmail.com',
            'receipt_to' => [
                'name' => 'Geraint',
                'surname' => 'Davidson',
                'billing_name' => 'Dav & Sons. Machinery',
                'address' => ' Section 32, Lot 19, Saraga Street',
                'address_2' => 'Six Mile',
                'city' => 'Port Moresby',
                'province' => 'National Capital District',
                'zip' => 121,
                'country' => 'Papua New Guinea'
            ]
        ];

        // return view('api.pdf.payment-receipt');
        $pdf = PDF::loadView('pdf', array(
            'data' => $data
        ));

        // download PDF file with download method
        return $pdf->stream('pdf_file.pdf');
    }
}
