<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        
        // // cara 1 membuat password tenkripsi
        // $validatedData['password'] = bcrypt($validatedData['password']);

        
        // cara 2 membuat password tenkripsi
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        // Alert setelah register
        // cara 1
        // $request->session()->flash('success', 'Registration successful! Please login');
        
        //cara 2    
        return redirect('/login')->with('success', 'Registration successful! Please login');
}
}
