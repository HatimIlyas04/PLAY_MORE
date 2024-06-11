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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('identifiant_utilisateur')->unique();
            $table->string('password');
            $table->string('nom_utilisateur');
            $table->string('prenom_utilisateur');
            $table->enum('sexe_utilisateur', ['Homme' , 'Femme']);
            $table->string('telephone_utilisateur');
            $table->text('adresse_utilisateur');
            $table->string('image_utilisateur')->nullable();
            $table->foreignId('ville_id')->constrained('villes')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('privilege_id')->constrained('privileges')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('carte_bancaire_id')->constrained('carte_bancaires')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
