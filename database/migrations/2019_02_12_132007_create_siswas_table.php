<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nis');
            $table->string('nama', 191);
            $table->integer('kelamin');
            $table->string('agama', 20);
            $table->string('tempat_lahir', 30);
            $table->datetime('tanggal_lahir');
            $table->string('alamat', 191);
            $table->bigInteger('no_tlp');
            $table->integer('id_rayon');
            $table->integer('id_jurusan');
            $table->integer('id_kelas');
            $table->string('foto', 191);
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
        Schema::dropIfExists('siswas');
    }
}
