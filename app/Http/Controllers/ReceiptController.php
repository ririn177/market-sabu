<?php
namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class ReceiptController extends Controller
{
    public function pdf()
    {
        $pdf = Pdf::loadView('receipt.pdf');
        return $pdf->download('nota-market-sabu.pdf');
    }
}
