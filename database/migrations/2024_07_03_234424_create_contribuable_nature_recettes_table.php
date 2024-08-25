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
        Schema::create('contribuable_nature_recettes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contribuable_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('nature_recette_communale_id');
            $table->foreign('nature_recette_communale_id')->references('id')->on('nature_recette_communales')->onDelete('cascade');
            $table->decimal('montant_du');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribuable_nature_recettes');
    }
};
