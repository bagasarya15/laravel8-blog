<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Registrasi',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData  = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        // Enkripsi Use bcrypt
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // Enkripsi Use Laravel Hash
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registrasi berhasil ! Silahkan login');
        return redirect('/login')->with('success', 'Registrasi berhasil ! Silahkan login');
    }
}
