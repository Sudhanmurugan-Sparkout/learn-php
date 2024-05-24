<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    function index(){
        return view('Auth/login');
    }
    function store(LoginRequest $request){
       $data=$request->only('email','password');
       
       if(!Auth::attempt($data)){
        throw ValidationException::withMessages([
            'email'=>"sorry the email does not match"
        ]);
       }else{
        $request->session()->regenerate();
        return view('Auth/home');
       }

      
    }
}
