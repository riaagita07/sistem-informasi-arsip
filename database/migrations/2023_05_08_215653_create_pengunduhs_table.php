<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengunduhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengunduhs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('arsip_id');
            $table->timestamps();
            $table->index('user_id');
            $table->index('arsip_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengunduhs');
    }
}
