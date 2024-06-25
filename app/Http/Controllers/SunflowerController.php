<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class SunflowerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        $companies = Company::with('teams')->get();
        $currentRoute = $request->path();
        if ($currentRoute === 'sunflower') {

            return view('sunflower', compact('companies'));
        } elseif ($currentRoute === 'tree') {

            return view('tree', compact('companies'));
        }
    }
}
