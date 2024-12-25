<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books',[BookController::class,'Showbook']); 
Route::get('/books/{test}',[BookController::class,'books']); 
Route::get('/about',[AboutController::class,'about']);
Route::get('/download',[FileController::class,'download']);
Route::get('/download/invoice/{InvoiceId}',[FileController::class,'downloadFile']);
Route::get('/download/invoice/{InvoiceId}/type/{fileType}',[FileController::class,'downloadFile']);
Route::get('/download/invoice/{InvoiceId}/type/{fileType?}',[FileController::class,'downloadFile']);
Route::get('/download/invoice',[FileController::class,'error']);
// Route::get('/invoice',[InvoiceController::class,'invoice']);
// Route::get('/invoice/{invoiceID?}',[InvoiceController::class,'invoice']);
Route::get('/invoice/{invoiceID}',[InvoiceController::class,'invoice']);
// Route::get('/task',[$Taskcontroller::class,'index']);
Route::get('/task',[TaskController::class,'index']);



