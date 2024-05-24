<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function store(Request $request){
        Session::put('user',$request->name);
        session::regenerate();
        // Session::invalidate();
        return view('sessionShow');
    }
}
