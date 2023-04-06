<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'judul', 'tempat', 'foto', 'isi_laporan', 'status'];
    protected $table = 'pengaduan_15475';
    public function tanggapan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
