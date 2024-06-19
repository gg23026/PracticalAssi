<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaciTable extends Migration
{
    public function up()
    {
        Schema::create('maci', function (Blueprint $table) {
            $table->id('MacaID');
            $table->foreignId('TurniraID')->constrained('turniri', 'TurniraID');
            $table->foreignId('Komanda1ID')->constrained('komandas', 'KomandasID');
            $table->foreignId('Komanda2ID')->constrained('komandas', 'KomandasID');
            $table->string('Rezultats', 10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maci');
    }
}

