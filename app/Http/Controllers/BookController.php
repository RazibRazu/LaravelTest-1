<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function Showbook(Request $request){

        //return 'This is first laravel class';
        echo 'This is echol','</br>';
        return 'This is nichol';

    }

    function books(Request $request,$test){// $variable ja nibe setai return e dite hobe
        return "Book {$test}";

    }
}
