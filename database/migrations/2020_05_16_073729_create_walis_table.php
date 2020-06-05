<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wali', 100);
            $table->string('nik_wali', 100);
            $table->string('tahun_lahir_wali', 100);
            $table->string('pendidikan_terakhir_wali', 100);
            $table->string('pekerjaan_wali', 100);
            $table->string('penghasilan_wali', 100);
            $table->timestamps();

            $table->bigInteger('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('walis');
    }
}
