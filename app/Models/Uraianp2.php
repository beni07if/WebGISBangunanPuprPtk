<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uraianp2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'uraianp1_id', 'uraian_pekerjaan2', 'tsb', 'bobot_maksimum', 'bobot', 'nilai'
    ];

    public function Uraian1()
    {
        return $this->belongsTo(Uraian1::class);
    }
}
