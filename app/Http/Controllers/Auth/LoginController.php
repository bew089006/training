<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     public function index()
    {
        return view('login.formlogin');

    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // Get the currently authenticated user...
            //$user = Auth::user();
            return redirect('admin/users');
        } else {
            return redirect('login')
                        ->with('error', 'Invalid User Or Password.');
        }
    }



}
