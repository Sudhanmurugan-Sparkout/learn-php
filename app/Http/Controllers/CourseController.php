<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=course::all();
        return view('course.index',['datas'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       return view('course.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course_data=$request->validate([
            'name'=>'required|string|max:255',
            'duration'=>'required|integer|max:10',
             'startingDate'=>'required|date',
                'endingDate'=>'required|date'
      ]);
        course::create($course_data);
        return redirect('course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        $data=course::find($course->id);
        return view('course.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        // dd($course->id);
        $data=course::find($course->id);
        return view('course.edit',compact('data'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        // dd($request);
       $update_data=$request->validate([
        'name'=>'required|string|max:255',
            'duration'=>'required|integer|max:10',
             'startingDate'=>'required|date',
                'endingDate'=>'required|date'
       ]);
       course::find($course->id)->update($update_data);
       return redirect('course');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy( course $course, Request $request)
    {
   
    
        course::find($course->id)->delete($request->all());
        return redirect('course');

}
}