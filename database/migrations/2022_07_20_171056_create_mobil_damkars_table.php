<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil_damkars', function (Blueprint $table) {
            $table->id();
            $table->string('tw');
            $table->string('tahun');
            $table->string('hari');
            $table->date('tanggal_pemeriksa')->nullable();
            $table->string('tanggal_cek')->nullable();
            $table->string('shift')->nullable();
            $table->integer('is_status')->default(0);
            $table->string('start')->nullable();
            $table->string('stop')->nullable();
            $table->string('air_accu')->nullable();
            $table->string('level_air_radiator')->nullable();
            $table->string('tempratur_mesin')->nullable();
            $table->string('level_oil')->nullable();
            $table->string('filter_solar')->nullable();
            $table->string('level_minyak_rem')->nullable();
            $table->string('suara_mesin')->nullable();
            $table->string('lampu_depan')->nullable();
            $table->string('lampu_belakan')->nullable();
            $table->string('lampu_rem')->nullable();
            $table->string('lampu_sein_kanan_depan')->nullable();
            $table->string('lampu_sein_kanan_belakang')->nullable();
            $table->string('lampu_sein_kiri_depan')->nullable();
            $table->string('lampu_sein_kiri_belakang')->nullable();
            $table->string('lampu_hazard')->nullable();
            $table->string('lampu_sorot')->nullable();
            $table->string('lampu_dalam_depan')->nullable();
            $table->string('lampu_dalam_tengah')->nullable();
            $table->string('lampu_dalam_belakang')->nullable();
            $table->string('wiper')->nullable();
            $table->string('spion')->nullable();
            $table->string('sirine')->nullable();
            $table->string('catatan')->nullable();

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
        Schema::dropIfExists('mobil_damkars');
    }
};
