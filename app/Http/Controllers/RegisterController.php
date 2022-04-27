<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
            "active" => "register"
        ]);
    }

    public function store(Request $request)
    {
        //return $request->all();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:4', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:7|max:255'
        ]);

        //$validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['password'] = Hash::make($validatedData['password']);

        //dd('Successful Registration :)');

        User::create($validatedData);

        //$request->session()->flash('success', 'Registration Successfully! Please Log In :)');

        return redirect('/login')->with('success', 'Registration Successfully! Please Log In :)');
    }

}
