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
        Schema::create('ambulances', function (Blueprint $table) {
            $table->id();
            $table->string('tw');
            $table->string('tahun');
            $table->string('hari');
            $table->date('tanggal_pemeriksa')->nullable();
            $table->string('tanggal_cek')->nullable();
            $table->string('shift')->nullable();
            $table->integer('is_status')->default(0);

            $table->string('tabung_oksigen')->nullable();
            $table->string('to_tekanan')->nullable();
            $table->string('apar')->nullable();
            $table->string('a_tekanan')->nullable();
            $table->string('kondisi_fisik')->nullable();
            $table->string('cairan_infus')->nullable();
            $table->string('perlak')->nullable();
            $table->string('tandu_dorong')->nullable();
            $table->string('kebersihan')->nullable();
            $table->string('roda')->nullable();
            $table->string('spons_kasur')->nullable();
            $table->string('tandu_lipat')->nullable();
            $table->string('air_wastafel')->nullable();
            $table->string('antiseptic_gel')->nullable();
            $table->string('tisu_kering')->nullable();
            $table->string('oxycan')->nullable();
            $table->string('tas_p3k')->nullable();
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
        Schema::dropIfExists('ambulances');
    }
};
