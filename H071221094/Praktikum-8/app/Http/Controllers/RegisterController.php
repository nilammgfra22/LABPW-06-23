<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store()
    {
        // Validasi Data
        $validatedData = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // Enkripsi password
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Memasukkan Data Registrasi ke dalam Database
        User::create($validatedData);

        // Masuk Ke Halaman Login dan Memberikan pesan berhasil registrasi
        // request()->session()->flash('success', 'Registrasion succesfull! Please Login');
        return redirect('/login')->with('success', 'Registrasion succesfull! Please Login');
    }
}
