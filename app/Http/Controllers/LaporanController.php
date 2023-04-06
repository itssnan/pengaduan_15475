<?php

namespace App\Http\Controllers;

use App\Models\tanggapan;
use Illuminate\Http\Request;
use App\Models\Pengaduan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lapor.index', [
            "title" => "Lapor"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->user_id);
        $validateData = $request->validate([
            'judul' => ['required', 'min:3'],
            'user_id' => 'required',
            'tempat' => 'required',
            'foto' => 'required',
            'isi_laporan' => 'required',
        ]);
        $validateData['foto'] = $request->file('foto')->store('image');

        Pengaduan::create($validateData);


        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $userId = auth()->guard('masyarakat')->user()->id;
        $data = Pengaduan::where('user_id', $userId)->get();
        $tanggapan = tanggapan::orderBy('created_at', 'desc');
        // $tanggapan= tanggapan::orderBy ('created_at','desc')->get();
        // $data = Pengaduan::all();
        return view('lapor/laporan', [
            "title" => "Laporan Saya",
            "active" => "laporan saya"
        ])->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = pengaduan::where('id', $id)->first();
        return view('laporan/edit', [
            'title' => 'Verifikasi'
        ])->with('data', $data);
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
        $request->validate([
            'judul' => 'required',
            'tempat' => 'required',
            'isi_laporan' => 'isi_laporan'



        ], []);
        $pengaduan = [
            'judul' => $request->status,
            'tempat' => $request->tempat,
            'isi_laporan' => $request->isi_laporan,


        ];
        pengaduan::where('id', $id)->update($pengaduan);
        return redirect()->to('laporan')->with('success', 'Berhasil mengubah status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = pengaduan::find($id);
        $data->delete();

        return redirect('laporan');
    }
}
