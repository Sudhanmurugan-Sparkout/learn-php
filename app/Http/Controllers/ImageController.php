<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    function store(ImageRequest $request){
//    dd($request->all());
         
        Storage::disk('public')->makeDirectory('uploads');
        $filename=time(). "." . $request->name . "." . $request->file('image')->guessExtension();
        // dd($filename);
        $request->file('image')->storeAS('uploads',$filename,'public');
            
    }
}
