<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';

    protected $fillable = [
        'id_ketua',
        'id_kelompok',
        'id_proposal',
    ];

    // Relationship to User (Ketua)
    public function ketua()
    {
        return $this->belongsTo(User::class, 'id_ketua', 'id');
    }

    // Relationship to Kelompok
    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class, 'id_kelompok', 'id');
    }

    // Relationship to Proposal
    public function proposal()
    {
        return $this->belongsTo(Proposal::class, 'id_proposal', 'id');
    }
}
