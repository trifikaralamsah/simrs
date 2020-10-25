<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pasien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_ktp');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('usia');
            $table->string('alamat');
            $table->string('tgl_masuk');
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
        Schema::dropIfExists('tbl_pasien');
    }
}
