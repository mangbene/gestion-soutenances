<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Salle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Remplir la base de données avec des données de test pour FORMATEC.
     */
    public function run(): void
    {
        // 1. Création de l'Administrateur
        User::create([
            'nom' => 'Admin',
            'prenom' => 'Super',
            'email' => 'admin@formatec.tg',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // 2. Création des membres du Jury (Enseignants / Encadreurs)
        $jurys = [
            ['nom' => 'KPOGLI', 'prenom' => 'Komla', 'email' => 'jury1@formatec.tg'],
            ['nom' => 'AMEY', 'prenom' => 'Kossi', 'email' => 'jury2@formatec.tg'],
            ['nom' => 'FOLIGAN', 'prenom' => 'Ekoue', 'email' => 'jury3@formatec.tg'],
        ];

        foreach ($jurys as $jury) {
            User::create([
                'nom' => $jury['nom'],
                'prenom' => $jury['prenom'],
                'email' => $jury['email'],
                'password' => Hash::make('password'),
                'role' => 'jury',
            ]);
        }

        // 3. Création des Étudiants (dont toi !)
        $etudiants = [
            ['nom' => 'DJIRAIBE', 'prenom' => 'Salkoutou', 'email' => 'etudiant1@formatec.tg', 'matricule' => 'MAT2024001', 'specialite' => 'Développement D\'application'],
            ['nom' => 'DOUTI', 'prenom' => 'Yendouboame', 'email' => 'etudiant2@formatec.tg', 'matricule' => 'MAT2024002', 'specialite' => 'Développement D\'application'],
            ['nom' => 'KONLANI', 'prenom' => 'Blaise', 'email' => 'etudiant3@formatec.tg', 'matricule' => 'MAT2024003', 'specialite' => 'Développement D\'application'],
        ];

        foreach ($etudiants as $etudiant) {
            User::create([
                'nom' => $etudiant['nom'],
                'prenom' => $etudiant['prenom'],
                'email' => $etudiant['email'],
                'password' => Hash::make('password'),
                'role' => 'etudiant',
                'matricule' => $etudiant['matricule'],
                'specialite' => $etudiant['specialite'],
            ]);
        }

        // 4. Création des Salles de soutenance
        Salle::create(['nom' => 'Amphithéâtre Principal', 'capacite' => 50, 'localisation' => 'Bâtiment A, RDC']);
        Salle::create(['nom' => 'Salle de Réunion B', 'capacite' => 15, 'localisation' => 'Bâtiment B, 1er Étage']);
    }
}