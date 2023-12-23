<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
    public function showForm()
    {
        return view('invoice.form');
    }

    public function generateInvoice(Request $request)
    {
        $data = $request->validate([
            'customer_name' => 'required|string',
            'invoice_date' => 'required|date',
            'description' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',
        ]);

        // Calculate the amount
        $data['amount'] = $data['quantity'] * $data['price'];

        $pdf = PDF::loadView('invoice.dynamic_invoice', compact('data'));

        return $pdf->download('invoice.pdf');
    }
}
