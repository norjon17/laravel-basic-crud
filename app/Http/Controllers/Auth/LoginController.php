<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return redirect()->route('home');
        } else {
            return back()->with(['errorMessage' => 'Invalid email or password'])->withInput();
        }
    }
}
