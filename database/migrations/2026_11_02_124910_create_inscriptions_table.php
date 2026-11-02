<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stagiaire_id')->constrained()->cascadeOnDelete();
            $table->foreignId('filiere_id')->constrained()->cascadeOnDelete();
            $table->date('date_naissance')->nullable();
            $table->string('anne_scolaire', 9);
            $table->string('statut', 30)->default('active');
            $table->timestamps();

            $table->unique(
                ['stagiaire_id', 'filiere_id', 'anne_scolaire'], 'inscription_unique'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
