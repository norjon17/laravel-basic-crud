<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class RegisterController extends Controller implements HasMiddleware
{
    // for guest user only
    public static function middleware(): array
    {
        return ['guest'];
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate the inputs
        $request->validate(['name' => 'required|max:255', 'username' => 'required|max:255', 'email' => 'required|email', 'password' => 'required|confirmed']);

        // store new user (password is hashed automatically by the 'hashed' cast in User model)
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // login attempt
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }
    }
}
