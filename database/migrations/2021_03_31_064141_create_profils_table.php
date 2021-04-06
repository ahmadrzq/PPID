<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('profil_ppid');
            $table->text('visi_misi');
            $table->text('tupoksi');
            $table->string('struktur_organisasi');
            $table->string('struktur_pemerintahan');
            $table->text('sk');
            $table->text('sekretariat_PPID');
            $table->text('maskot');
            $table->string('maklumat');
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
        Schema::dropIfExists('profils');
    }
}
