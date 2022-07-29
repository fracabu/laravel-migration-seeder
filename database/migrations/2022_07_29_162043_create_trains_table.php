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
            $table->Azienda();
            $table->Stazionedipartenza();
            $table->Stazionediarrivo();
            $table->Orariodipartenza();
            $table->Orariodiarrivo();
            $table->CodiceTreno();
            $table->NumeroCarrozze();
            $table->Inorario();
            $table->Cancellato();
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
