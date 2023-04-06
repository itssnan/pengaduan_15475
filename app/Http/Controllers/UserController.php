<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas_15475;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = petugas_15475::all();
        return view('admin.user.index', [
            'title' => 'User'
        ])->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->role);
        $validateData = $request->validate([
            'name' => ['required', 'min:3', 'max:50', 'unique:users'],
            'nik' => 'required|min:16|max:16',
            'email' => 'required|unique:users',
            'no_telp' => 'required|min:11|max:13|unique:users',
            'password' => 'required|min:5|max:255',
            'role' => 'required'

        ]);
        $validateData['password'] = Hash::make($validateData['password']);

        Petugas_15475::create($validateData);

        $request = session();
        $request->flash('success', 'Register succesful!!, Please login');

        return redirect('/user');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin/user/create', [
            'title' => 'Create User'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
