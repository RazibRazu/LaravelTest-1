<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function download(){
        return 'This is download process';
    }

    function downloadFile(Request $request,$invoiceId,$fileType="PDF"){
        return response("This is fil {$fileType} and download: {$invoiceId}");

    }
    function error(){
        return "Please put invoice";
    }
}
