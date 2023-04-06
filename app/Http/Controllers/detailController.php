<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\tanggapan;

class detailController extends Controller
{
    public function index($id)
    {
        $pengaduan = Pengaduan::find($id);
        $tanggapan = tanggapan::where('pengaduan_id', $id)->orderBy('created_at', 'desc')->get();
        return view('home/detail/index', [
            "title" => "Laporan Saya",
            "active" => "laporan saya",
            'pengaduan' => $pengaduan,
            'tanggapans' => $tanggapan
        ]);
    }
}
