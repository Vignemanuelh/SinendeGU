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
        Schema::create('contribuable_nature_recette', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contribuable_id')->constrained()->onDelete('cascade');
            $table->foreignId('nature_recette_communale_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribuable_nature_recette');
    }
};
