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
        Schema::create('nature_recette_communales', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom');
            $table->decimal('tarif', 10, 2)->default(0.00);
            $table->decimal('montant_estime', 10, 2)->default(0.00);
            $table->decimal('montant_recouvre', 10, 2)->default(0.00);
            $table->decimal('taux_recouvrement', 5, 2)->default(0.00);
            $table->string('preuve')->nullable();
            $table->string('fichiers')->nullable();
            $table->unsignedBigInteger('sous_categorie_recette_id');
            $table->foreign('sous_categorie_recette_id')->references('id')->on('sous_categorie_recettes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nature_recette_communales');
    }
};
