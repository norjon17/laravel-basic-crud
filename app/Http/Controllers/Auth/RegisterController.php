<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    //for guest user only
    public function __construct()
    {
        return $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //validate the inputs
        $this->validate($request, ['name' => 'required|max:255', 'username' => 'required|max:255', 'email' => 'required|email', 'password' => 'required|confirmed']);

        //store new user
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //login attempt
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }
    }
}
