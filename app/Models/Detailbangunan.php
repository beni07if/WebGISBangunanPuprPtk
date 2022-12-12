<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailbangunan extends Model
{
    use HasFactory;

    protected $fillable = [
        'bangunan2_id', 'nama_bangunan', 'tahun_dibangun', 'jumlah_tingkat', 'ttlb', 'llb', 'klb', 'fbr', 'klasifikasi_bangunan', 'dasar_analisis1', 'dasar_analisis2', 'tingkat', 'kerusakan', 'jenis_tk', 'jenis_perawatan', 'kerusakan_ringan', 'kerusakan_sedang', 'kerusakan_berat', 'kerusakan_khusus'
    ];

    public function Bangunan2()
    {
        return $this->belongsTo(Bangunan2::class);
    }

    public function Uraian1()
    {
        return $this->hasMany(Uraian1::class,  'detailbangunan_id', 'id');
    }
}
