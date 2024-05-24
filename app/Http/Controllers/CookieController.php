<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    function setCookies(Request $request)
    {

        $cookie=cookie('food',$request->food,60000);
        return $cookie;
       
    }
}
