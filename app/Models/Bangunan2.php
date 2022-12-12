<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bangunan2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'bangunan_id', 'bangunan2', 'tingkat_kerusakan', 'keterangan'
    ];

    public function Bangunan()
    {
        return $this->belongsTo(Bangunan::class);
    }

    public function Detailbangunan()
    {
        return $this->hasMany(Detailbangunan::class,  'bangunan2_id', 'id');
    }
}
