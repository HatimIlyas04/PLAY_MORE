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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->date('date_commande')->nullable();
            $table->text('description_commande')->nullable();
            $table->decimal('prix_total_hors_taxes_commande', 12, 2);
            $table->decimal('prix_total_toutes_taxes_comprises_commande', 12, 2);
            $table->foreignId('utilisateur_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('etat_commande_id')->constrained('etat_commandes')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
