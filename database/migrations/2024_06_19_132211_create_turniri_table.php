<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurniriTable extends Migration
{
    public function up()
    {
        Schema::create('turniri', function (Blueprint $table) {
            $table->id('TurniraID');
            $table->string('Nosaukums');
            $table->date('Datums');
            $table->string('AtrašanasVieta');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('turniri');
    }
}

