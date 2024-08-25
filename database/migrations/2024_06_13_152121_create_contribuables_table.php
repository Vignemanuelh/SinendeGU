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
        Schema::create('contribuables', function (Blueprint $table) {
            $table->id();
            $table->string('identifiant');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('npi')->unique();
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('activite');
            $table->string('arrondissement');
            $table->string('quartier');
            $table->string('maison');
            $table->foreignId('commune_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribuables');
    }
};
