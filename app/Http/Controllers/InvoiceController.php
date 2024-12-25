<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function invoice(Request $request,$invoiceID){
        if ($request->has('download')) {
            $type = $request->input('download');
            return response("Download {$type} Invoice with ID: {$invoiceID}");
        }

        return response("This is invoice: {$invoiceID}");
    }
}
