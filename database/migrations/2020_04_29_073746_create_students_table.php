<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 100)->nullable();
            $table->string('jenis_kelamin', 100)->nullable();
            $table->string('nisn', 30)->unique();
            $table->string('asal_sekolah', 100);
            $table->string('lulusan_angkatan', 100);
            $table->string('foto_diri', 255);
            $table->string('nik', 20);
            $table->string('tempat_lahir', 100);
            $table->string('tanggal_lahir', 20);
            $table->string('akta', 100);
            $table->string('agama', 100);
            $table->string('alamat', 100);
            $table->string('rt', 100);
            $table->string('rw', 100);
            $table->string('nama_dusun', 100);
            $table->string('kelurahan', 100);
            $table->string('kecamatan', 100);
            $table->string('kode_pos', 100);
            $table->string('transportasi', 100);
            $table->string('tinggal_bersama', 100);
            $table->string('anak_ke', 100);
            $table->string('kks', 100);
            $table->string('no_kks', 100)->nullable();
            $table->string('pkh', 100);
            $table->string('no_pkh', 100)->nullable();
            $table->string('kip', 100);
            $table->string('no_kip', 100)->nullable();
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
        Schema::dropIfExists('students');
    }
}
