<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('StazionePartenza');
            $table->string('StazioneArrivo');
            $table->time('OrarioPartenza');
            $table->time('OrarioArrivo');
            $table->string('CodiceTreno');
            $table->integer('NumeroCarrozze');
            $table->boolean('InOrario')->default(true);
            $table->boolean('Cancellato')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
