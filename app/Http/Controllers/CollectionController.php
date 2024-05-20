<?php

namespace App\Http\Controllers;

use App\Models\players;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    function index(){
        $players=players::all();
       return $players->container(1);
    }
}
