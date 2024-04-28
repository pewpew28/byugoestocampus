<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'member';

    protected $fillable = [
        'id_kelompok',
        'npsn',
        'nim',
        'nama',
        'email',
        'telp',
        'posisi',
    ];

    // Relationship to Kelompok
    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class, 'id_kelompok', 'id');
    }
}
