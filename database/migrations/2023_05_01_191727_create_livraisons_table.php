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
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->date('date_livraison');
            $table->text('description_livraison');
            $table->text('adresse_livraison');
            $table->decimal('frais_livraison', 12, 2);
            $table->boolean('client_livré')->default(false);
            $table->foreignId('commande_id')->constrained('commandes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('mode_livraison_id')->constrained('mode_livraisons')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('boutique_id')->nullable();
            $table->foreign('boutique_id')->references('id')->on('boutiques');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livraisons');
    }
};
