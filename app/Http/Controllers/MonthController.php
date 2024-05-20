<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = $request->route('month');
        switch ($data) {
            case 1:
                return "January";
                break;
            case 2:
                return "february";
                break;
            case 3:
                return "march";
                break;
            case 4:
                return "april";
                break;
            case 5:
                return "may";
                break;
            case 6:
                return "june";
                break;
            case 7:
                return "July";
                break;
            case 8:
                return "August";
                break;
            case 9:
                return "september";
                break;
            case 10:
                return "octoper";
                break;
            case 11:
                return "november";
                break;
            case 12:
                return "december    ";
                break;
        }
    }
}
