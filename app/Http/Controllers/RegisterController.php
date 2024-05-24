<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    function index(){
        return view('Auth/register');
    }
    function store(RegisterRequest $request){
        $data=$request->all();
        $obj=new User();
        $obj->name=$data['name'];
        $obj->email=$data['email'];
        $obj->password=bcrypt($data['password']);
        $obj->save();
       Auth::login($obj);
       return view('auth/home');
    }
}
