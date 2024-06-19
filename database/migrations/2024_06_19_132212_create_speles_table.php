<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpelesTable extends Migration
{
    public function up()
    {
        Schema::create('speles', function (Blueprint $table) {
            $table->id('SpelesID');
            $table->foreignId('MacaID')->constrained('maci', 'MacaID');
            $table->foreignId('SpeletajsID')->constrained('speletaji', 'SpeletajsID');
            $table->integer('Elimination')->nullable();
            $table->integer('Death')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('speles');
    }
}

