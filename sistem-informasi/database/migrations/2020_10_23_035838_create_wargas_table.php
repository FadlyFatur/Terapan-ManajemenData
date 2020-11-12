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
            $table->string('rw');
            $table->foreignId('rt_id')
            ->constrained('rts')
            ->onDelete('cascade')->nullable();
            $table->foreignId('agama_id')
            ->constrained('agamas')
            ->onDelete('cascade')->nullable();
            $table->foreignId('kerja_id')
            ->constrained('kerjas')
            ->onDelete('cascade')->nullable();
            $table->foreignId('satus_perkawinan_id')
            ->constrained('kawins')
            ->onDelete('cascade')->nullable();
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
