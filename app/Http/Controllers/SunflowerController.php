<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\team;
use Illuminate\Http\Request;

class SunflowerController extends Controller
{
    public function __invoke()
    {
        $companies = Company::with('teams')->get();

        return view('sunflower', compact('companies'));
    }
}
