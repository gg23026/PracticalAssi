<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeletajiTable extends Migration
{
    public function up()
    {
        Schema::create('speletaji', function (Blueprint $table) {
            $table->id('SpeletajsID');
            $table->string('Vards');
            $table->string('Uzvards');
            $table->string('Lietotajvards');
            $table->unsignedBigInteger('KomandasID');
            $table->integer('Rangs');
            $table->timestamps();

            $table->foreign('KomandasID')->references('KomandasID')->on('komandas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('speletaji');
    }
}




