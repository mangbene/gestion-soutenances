<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('soutenances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etudiant_id')->constrained('users')->cascadeOnDelete();
            $table->text('titre_memoire');
            $table->string('fichier_memoire'); // Chemin du PDF
            $table->date('date_soutenance')->nullable();
            $table->time('heure_debut')->nullable();
            $table->time('heure_fin')->nullable();
            $table->foreignId('salle_id')->nullable()->constrained('salles')->nullOnDelete();
            $table->enum('statut', ['en_attente', 'planifiee', 'terminee', 'annulee'])->default('en_attente');
            $table->string('mention_finale')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('soutenances');
    }
};