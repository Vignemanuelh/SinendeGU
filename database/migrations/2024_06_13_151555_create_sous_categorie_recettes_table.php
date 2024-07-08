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
        Schema::create('sous_categorie_recettes', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom');
            $table->decimal('montant_estime');
            $table->decimal('montant_recouvre');
            $table->decimal('taux_recouvrement');
            $table->unsignedBigInteger('categorie_recette_id');
            $table->foreign('categorie_recette_id')->references('id')->on('categorie_recettes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_categorie_recettes');
    }
};
