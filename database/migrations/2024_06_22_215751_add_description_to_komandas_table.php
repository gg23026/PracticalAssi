<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('komandas', function (Blueprint $table) {
        $table->text('Apraksts')->nullable();
    });
}

public function down()
{
    Schema::table('komandas', function (Blueprint $table) {
        $table->dropColumn('Apraksts');
    });
}

};
