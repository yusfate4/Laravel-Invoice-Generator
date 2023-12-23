<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/invoice-form', [InvoiceController::class, 'showForm']);

// Route::get('invoice', [InvoiceController::class, 'Invoice']);



// Route::get('/generate-invoice', [InvoiceController::class, 'Invoice']);


Route::get('/invoice-form', [InvoiceController::class, 'showForm']);
Route::post('/generate-invoice', [InvoiceController::class, 'generateInvoice'])->name('generate-invoice');
