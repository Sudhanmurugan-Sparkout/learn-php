<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentsController extends Controller
{
   function index(){
    $student_datas=student::all();
    return view('students.index',["datas"=>$student_datas]);
   }
   function create(){
    return view('students.create');
   }
   function store(Request $request){
    $data=$request->validate([
        'name' => 'required|max:255|string',
        'gender' => 'required|max:10|string',
        'DOB' => 'required|date',
        'class' => 'required|max:255|string' 
    ]);
        student::create($data);
        return redirect(route('student.index'));
            
}
function edit(int $id){
    $student=student::find($id);
    return view('students.edit',compact('student'));
}
function update(int $id,Request $request){
    $data=$request->validate([
        'name' => 'required|max:255|string',
        'gender' => 'required|max:10|string',
        'DOB' => 'required|date',
        'class' => 'required|max:255|string' 
    ]);
    student::find($id)->update($data);
    return redirect( route('student.index') )->with('success','the data updated successfully');
}
function destroy(int $id){
    $student=student::find($id);
    $student->delete();
    return redirect( route('student.index') );
}
}