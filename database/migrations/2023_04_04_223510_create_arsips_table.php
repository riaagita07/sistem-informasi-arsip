<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsips', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('namaarsip');
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->text('keterangan')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
            $table->index('kode');
            $table->index('category_id');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arsips');
    }
}
