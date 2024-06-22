<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToSpeletajiTable extends Migration
{
    public function up()
    {
        Schema::table('speletaji', function (Blueprint $table) {
            $table->text('apraksts')->nullable();
        });
    }

    public function down()
    {
        Schema::table('speletaji', function (Blueprint $table) {
            $table->dropColumn('apraksts');
        });
    }
}

