<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Display the login page if the user is not authenticated, otherwise redirect to the add-products page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function index()
    {
        if (Auth::check()) {

            return redirect()->route('add-products');
        }

        return view('Auth/login');
    }
    /**
     * Attempt to authenticate the user with the provided credentials.
     * If successful, redirect to the add-products page.
     * If unsuccessful, redirect back with an error message.
     *
     * @param LoginRequest $request The HTTP request containing the email and password.
     * @return \Illuminate\Http\RedirectResponse The redirect response.
     */
    function store(LoginRequest $request)
    {
        $data = $request->only('email', 'password');

        try {
            if (Auth::attempt($data)) {
                $request->session()->regenerate();
                return redirect()->route('add-products');
            } else {
                throw ValidationException::withMessages([
                    'email' => "The Credentials is not match "
                ]);
            }
        } catch (ValidationException  $e) {

            return redirect()->back()->with('Authenticate', $e->getMessage());
        }
    }
    /**
     * Logout the authenticated user.
     *
     * @return \Illuminate\Http\RedirectResponse The redirect response.
     */
    function destroy()
    {
        Auth::logout();

        return redirect('login');
    }
}
