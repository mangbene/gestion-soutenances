<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jury_soutenance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soutenance_id')->constrained('soutenances')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // Le membre du jury
            $table->enum('role_jury', ['president', 'examinateur', 'directeur_memoire'])->default('examinateur');
            $table->timestamps();

            // Empêche d'ajouter le même jury deux fois pour la même soutenance
            $table->unique(['soutenance_id', 'user_id']); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jury_soutenance');
    }
};