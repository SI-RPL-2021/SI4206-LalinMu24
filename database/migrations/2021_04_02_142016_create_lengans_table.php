<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLengansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lengans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perempatan_id')->references('id')->on('perempatans');
            $table->integer('lengan');
            $table->integer('merah');
            $table->integer('kuning');
            $table->integer('hijau');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lengans');
    }
}
