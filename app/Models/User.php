<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom', 'prenom', 'email', 'password', 'role', 
        'matricule', 'specialite', 'telephone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // --- RELATIONS ---

    // Si l'utilisateur est un étudiant, il a UNE soutenance
    public function soutenance()
    {
        return $this->hasOne(Soutenance::class, 'etudiant_id');
    }

    // Si l'utilisateur est un jury, il a PLUSIEURS évaluations
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class, 'jury_id');
    }

    // Les soutenances que cet utilisateur (jury) doit évaluer
    public function soutenancesAJuryer()
    {
        return $this->belongsToMany(Soutenance::class, 'jury_soutenance')
                    ->withPivot('role_jury')
                    ->withTimestamps();
    }
}