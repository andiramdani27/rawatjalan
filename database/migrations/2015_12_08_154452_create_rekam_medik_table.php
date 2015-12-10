<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekamMedikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medik', function (Blueprint $table) {
            $table->string('id', 9);
            $table->string('kode_visit', 4);
            $table->integer('usia_berobat');
            $table->date('tgl_visit');
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->string('tekanan_darah', 25)->nullable();
            $table->text('resep')->nullable();
            $table->text('anamnesis')->nullable();
            $table->text('diagnosis');
            $table->text('tindakan')->nullable();
            $table->primary(['id', 'kode_visit']);
            // $table->string('id_dokter', 6);
            // $table->string('id_poli', 5);

            $table->foreign('id')->references('id')->on('pasien')->onDelete('cascade');
            // $table->foreign('id_dokter')->references->('id')->on('dokter')->onDelete('cascade');
            // $table->foreign('id_poli')->references->('id')->on('poli')->onDelete('cascade');

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
        Schema::drop('rekam_medik');
    }
}