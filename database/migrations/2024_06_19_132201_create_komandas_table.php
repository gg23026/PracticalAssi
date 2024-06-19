<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomandasTable extends Migration
{
    public function up()
    {
        Schema::create('komandas', function (Blueprint $table) {
            $table->id('KomandasID');
            $table->string('Nosaukums');
            $table->date('IzveidesDatums');
            $table->string('Valsts');
            $table->integer('Rangs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('komandas');
    }
}


