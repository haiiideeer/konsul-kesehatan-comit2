<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
{
    Schema::create('konsultasis', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pasien');
        $table->string('email');
        $table->text('keluhan');
        $table->string('dokter');
        $table->date('tanggal');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konsultasis');
    }
};
