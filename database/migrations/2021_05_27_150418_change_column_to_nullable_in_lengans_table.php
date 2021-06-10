<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnToNullableInLengansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lengans', function (Blueprint $table) {
            $table->integer('merah')->nullable()->change();
            $table->integer('kuning')->nullable()->change();
            $table->integer('hijau')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lengans', function (Blueprint $table) {
            //
        });
    }
}
