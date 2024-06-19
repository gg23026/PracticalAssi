<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatistikaTable extends Migration
{
    public function up()
    {
        Schema::create('statistika', function (Blueprint $table) {
            $table->id('StatistikasID');
            $table->foreignId('SpeletajsID')->constrained('speletaji', 'SpeletajsID');
            $table->foreignId('KomandasID')->constrained('komandas', 'KomandasID');
            $table->integer('Uzvaras');
            $table->integer('Zaudejumi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('statistika');
    }
}

