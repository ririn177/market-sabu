
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\BroadcastController;

// Halaman utama MARKET-SABU
Route::get('/', function () {
    return view('welcome');
});

// Route cetak struk thermal
Route::get('/print-receipt', [ReceiptController::class, 'print'])
    ->name('receipt.print');

// Route cetak struk PDF
Route::get('/receipt-pdf', [ReceiptController::class, 'pdf']);

// Route broadcasting
Route::get('/broadcast-test', [BroadcastController::class, 'send']);
