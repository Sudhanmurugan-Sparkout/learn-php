<?php

namespace App\Http\Controllers;

use App\Models\student_details;
use Illuminate\Http\Request;

class studentsController extends Controller
{
   function index(){
    return view('students.index');
   }
   function create(){
    return view('students.create');
   }
   function store(Request $request){
    // $request->validate([
    //     'name' => 'required|max:255|string',
    //     'gender' => 'required|max:10|string',
    //     'dob' => 'required|date',
    //     'class' => 'required|max:255|string' 
    // ]);
        student_details::create([
            'name'=>$request->name,
            'gender'=>$request->gender,
            'DOB'=>$request->dob,
            'class'=>$request->class
        ])->with('data added');
   }
}
