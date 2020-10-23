<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->string('nik',16);
            $table->string('nama_lengkap');
            $table->boolean('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->boolean('status');
            $table->foreignId('rt_id')
            ->constrained('rts')
            ->onDelete('cascade');
            $table->foreignId('agama_id')
            ->constrained('agamas')
            ->onDelete('cascade');
            $table->foreignId('pendidikan_id')
            ->constrained('pendidikans')
            ->onDelete('cascade');
            $table->foreignId('kerja_id')
            ->constrained('kerjas')
            ->onDelete('cascade');
            $table->foreignId('satus_perkawinan_id')
            ->constrained('kawins')
            ->onDelete('cascade');
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
        Schema::dropIfExists('wargas');
    }
}
