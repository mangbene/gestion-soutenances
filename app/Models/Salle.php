<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'capacite', 'localisation'
    ];

    // --- RELATIONS ---
    
    // Une salle peut accueillir plusieurs soutenances
    public function soutenances()
    {
        return $this->hasMany(Soutenance::class);
    }
}