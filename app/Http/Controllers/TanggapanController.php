<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\tanggapan;

class TanggapanController extends Controller
{
    public function index($id)
    {
        $pengaduan = pengaduan::find($id);
        $tanggapan = tanggapan::where('pengaduan_id', $id)->orderBy('created_at', 'desc')->get();
        return view('admin.tanggapan.index', [
            'title' => 'Tanggapan',
            'pengaduan' => $pengaduan,
            'tanggapans' => $tanggapan
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->user_id);
        $request->request->add(['user_id' => auth()->guard('petugas')->user()->id]);
        $tanggapan = tanggapan::create($request->all());
        return redirect('/dashboard');
    }
}
