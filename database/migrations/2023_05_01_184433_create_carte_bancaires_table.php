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
        Schema::create('carte_bancaires', function (Blueprint $table) {
            $table->id();
            $table->string('numero_carte_bancaire')->unique();
            $table->date('date_expiration_carte_bancaire')->nullable();
            $table->string('code_validation_carte_bancaire')->nullable();
            $table->decimal('solde_carte_bancaire' , 12, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carte_bancaires');
    }
};
