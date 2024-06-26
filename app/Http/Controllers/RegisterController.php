<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display the registration form.
     *
     * @return \Illuminate\View\View The registration form view.
     */
    function index(){
    
        return view('Auth/register');
    }
    /**
     * Store a newly registered user in the database and log them in.
     *
     * @param RegisterRequest $request The request containing the user's registration data.
     * @return \Illuminate\Http\RedirectResponse The redirect to the product addition page.
     */
    function store(RegisterRequest $request){
        dd( $request->input('productName'));
        $data = $request->all();
        $obj = new User();
        $obj->name = $data['name'];
        $obj->email = $data['email'];
        $obj->password = bcrypt($data['password']);
        $obj->save();
        Auth::login($obj);
        
        return redirect()->route('add-products');
    }
}
