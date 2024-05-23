<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CarController extends Controller
{
    function store(CarRequest $request){
       
        $data=$request->all();
        $fileName=time() . "." .$data['name'] ."." . $request->file('image')->guessExtension();
        // dd($fileName);
        $request->image->move( public_path('images'),$fileName);
        $obj=new car();
        $obj->name=$data['name'];
        $obj->price=$data['price'];
        $obj->image=$fileName;
        $obj->save();
   
    }

    function show(){
        $cars=car::all();
        return view('carShow',compact('cars'));
    }
    
}
