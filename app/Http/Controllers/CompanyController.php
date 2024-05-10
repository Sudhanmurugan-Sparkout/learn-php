<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function showEmployee(int $id){
        $company=company::with('getEmployee')->whereId($id)->first();   
        return view ('Relationship.show',compact('company'));
    }
    FUNCTION showClient(int $id){
        $company=company::find($id);
        $clients=$company->getClients;
        return view('Relationship.clientshow',compact('company','clients'));
    }
}
