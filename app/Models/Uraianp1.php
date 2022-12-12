<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uraianp1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'detailbangunan_id', 'uraian_pekerjaan1'
    ];

    public function Detailbangunan()
    {
        return $this->belongsTo(Detailbangunan::class);
    }

    public function Uraian2()
    {
        return $this->hasMany(Uraian2::class,  'uraian1_id', 'id');
    }
}
