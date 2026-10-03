<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soutenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'etudiant_id', 'titre_memoire', 'fichier_memoire', 
        'date_soutenance', 'heure_debut', 'heure_fin', 
        'salle_id', 'statut', 'mention_finale'
    ];

    // --- RELATIONS ---

    // La soutenance appartient à UN étudiant
    public function etudiant()
    {
        return $this->belongsTo(User::class, 'etudiant_id');
    }

    // La soutenance a lieu dans UNE salle
    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

    // La soutenance est évaluée par PLUSIEURS jurys (Table de liaison)
    public function jurys()
    {
        return $this->belongsToMany(User::class, 'jury_soutenance')
                    ->withPivot('role_jury')
                    ->withTimestamps();
    }

    // La soutenance a PLUSIEURS évaluations (notes)
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}