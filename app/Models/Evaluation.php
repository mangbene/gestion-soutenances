<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'soutenance_id', 'jury_id', 'note', 'appreciation'
    ];

    // --- RELATIONS ---

    // L'évaluation appartient à UNE soutenance
    public function soutenance()
    {
        return $this->belongsTo(Soutenance::class);
    }

    // L'évaluation est donnée par UN jury
    public function jury()
    {
        return $this->belongsTo(User::class, 'jury_id');
    }
}