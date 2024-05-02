<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fallbackController extends Controller
{
    function __invoke()
    {
        return view('welcome');
    }
}
