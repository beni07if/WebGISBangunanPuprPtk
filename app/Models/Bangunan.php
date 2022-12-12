<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bangunan extends Model
{
    use HasFactory;
    protected $fillable = [
        'bangunan'
    ];

    public function Bangunan2()
    {
        return $this->hasMany(Bangunan2::class,  'bangunan_id', 'id');
    }
}
