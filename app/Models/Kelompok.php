<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;
    protected $table = 'kelompok';
    protected $fillable = [
        'id_ketua', // Mengganti 'name' menjadi 'nama'
        'nama_kelompok',
    ];
    public function ketua()
    {
        return $this->belongsTo(User::class, 'id', 'id_ketua');
    }
}
