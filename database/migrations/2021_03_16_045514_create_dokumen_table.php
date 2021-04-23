<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('kategori_id');
            $table->integer('jenis_id');
            $table->integer('tipe_id');
            $table->integer('status_dokumen_id');
            $table->integer('dinas_id');
            $table->string('judul', 191);
            $table->string('file', 191);
            $table->string('keterangan', 191);
            $table->text('kandunganInfo');
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
        Schema::dropIfExists('dokumen');
    }
}
