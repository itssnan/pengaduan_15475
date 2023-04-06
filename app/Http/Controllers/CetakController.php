<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\tanggapan;

class CetakController extends Controller
{
    public function index($id)
    {
        $pengaduan = pengaduan::find($id);
        $tanggapan = tanggapan::where('pengaduan_id', $id)->orderBy('created_at', 'desc')->get();
        return view('admin.dashboard.cetak', ['title' => 'Cetak Laporan', 'pengaduan' => $pengaduan, 'tanggapans' => $tanggapan]);
    }
}
