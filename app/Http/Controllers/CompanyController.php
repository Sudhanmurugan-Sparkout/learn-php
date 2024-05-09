<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function showEmployees(int $id){
        $company=company::find($id);
        $employees=$company->getEmployee;
        return view ('company.show',compact('company','employees'));
    }
}
