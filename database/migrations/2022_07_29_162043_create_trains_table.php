<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_di_partenza', 50);
            $table->string('stazione_di_arrivo', 50);
            $table->dateTime('orario_di_partenza', 0);
            $table->dateTime('orario_di_arrivo', 0);
            $table->integer('numero_treno');
            $table->integer('numero_carrozza');
            $table->string('in_orario', 20);
            $table->string('cancellato', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
