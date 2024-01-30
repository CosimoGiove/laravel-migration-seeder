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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda",50);
            $table->string("stazione_di_partenza",50);
            $table->string("stazione_di_arrivo",50);
            $table->time('orario_di_partenza', $precision = 0);
            $table->time('orario_di_arrivo', $precision = 0);
            $table->char("codice_treno",5);
            $table->tinyInteger("Numero_carrozze");
            $table->boolean("in_orario") -> default(false);
            $table->boolean("cancellato") -> default(false);
            $table->timestamps();
            $table->date("data_di_partenza");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
