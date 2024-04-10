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
        Schema::create('fuel_record', function (Blueprint $table) {
            $table->id();
            $table->string('pavadinimas');
            $table->string('kodas');
            $table->decimal('uzpiltas_kuro_kiekis', 8, 2);
            $table->date('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_record');
    }
};
