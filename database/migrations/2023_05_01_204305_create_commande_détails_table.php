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
        Schema::create('commande_details', function (Blueprint $table) {
            $table->primary(['article_id' , 'commande_id']);
            $table->foreignId('article_id')->constrained('articles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('commande_id')->constrained('commandes')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantite_commande');
            $table->decimal('sous_total', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande_details');
    }
};
