<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provinsi_id');            
            $table->string('nama', 191);
            $table->string('judul', 191);
            $table->string('kode', 30);
            $table->string('nik', 30);
            $table->string('jenisKelamin', 30);
            $table->string('tempatLahir', 30);
            $table->date('tanggalLahir');
            $table->string('alamat', 191);
            $table->string('tujuanInformasi', 191);
            $table->string('kota', 30);
            $table->string('pos', 30);
            $table->string('telepon', 30);
            $table->tinyInteger('status')->default('0');        
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
        Schema::dropIfExists('permohonan');
    }
}
