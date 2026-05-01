<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
     public function index() 
    {
     $chirps = [
        [

        'author' => 'Jane Doe',
        'message' => 'Just Deployed My First Laravel App',
        'time' => '5 minutes ago'
        ],

     ];

        return view('home', ['chirps' => $chirps]);
    }

}
