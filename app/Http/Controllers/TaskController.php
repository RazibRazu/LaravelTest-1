<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks= [
        [
            'id' => 1,
            'name' => 'Task 1',
            'description' => 'This is task 01'
        ],
        [
            'id' => 2,
            'name' => 'Task 2',
            'description' => 'This is task 02'
        ],
        [
            'id' => 3,
            'name' => 'Task 3',
            'description' => 'This is task 03'
        ]
    ];
    function index(){
        // return response($this->tasks);
        return response()->json($this->tasks);
    }
}
