<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soutenance_id')->constrained('soutenances')->cascadeOnDelete();
            $table->foreignId('jury_id')->constrained('users')->cascadeOnDelete();
            $table->decimal('note', 5, 2); // Note sur 20 (ex: 14.50)
            $table->text('appreciation')->nullable();
            $table->timestamps();

            // Un jury ne peut donner qu'une seule note par soutenance
            $table->unique(['soutenance_id', 'jury_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};