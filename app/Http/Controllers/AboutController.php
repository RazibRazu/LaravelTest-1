<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about(Request $request){
        return response('This is about page') ;

    }
}
