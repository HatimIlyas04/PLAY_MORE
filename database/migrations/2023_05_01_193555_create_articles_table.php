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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('designation_article')->unique();
            $table->text('description_article');
            $table->string('image_article')->nullable();
            $table->decimal('prix_article', 12, 2);
            $table->float('taux_remise');
            $table->float('taux_tva');
            $table->integer('quantite_stock');
            $table->integer('seuil_stock')->default(0);
            $table->foreignId('fournisseur_id')->constrained('fournisseurs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('marque_id')->constrained('marques')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('categorie_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
