<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $table = 'proposal';

    protected $fillable = [
        'id_kelompok',
        'judul',
        'ide_bisnis',
        'bmc',
        'deskripsi_lr',
        'file_lr',
        'file_pemasaran',
        'deskripsi_pemasaran',
        'file_maintenance',
        'deskripsi_maintenance',
        'status',
    ];

    // Relationship to Kelompok model
    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class, 'id_kelompok', 'id');
    }
}
