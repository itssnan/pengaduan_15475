<?php

namespace App\Http\Controllers;


use App\Models\Masyarakat_15475;
use App\Models\Petugas_15475;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login/registrasi', [
            "title" => "Registrasi"
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'min:3', 'max:50', 'unique:users'],
            'nik' => 'required|min:16|max:16',
            'email' => 'required|unique:users',
            'no_telp' => 'required|min:11|max:13|unique:users',
            'password' => 'required|min:5|max:255'

        ]);
        $validateData['password'] = Hash::make($validateData['password']);

        Masyarakat_15475::create($validateData);

        $request = session();
        $request->flash('success', 'Register succesful!!, Please login');

        return redirect('/login');
    }
}
