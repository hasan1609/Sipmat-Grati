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
        Schema::create('edg_blok2s', function (Blueprint $table) {
            $table->id();
            $table->string('tw');
            $table->string('tahun');
            $table->string('hari');
            $table->string('tanggal_pelaksanaan');
            $table->string('tanggal_cek')->nullable();
            $table->string('shift')->nullable();
            $table->integer('is_status')->default(0);
            //parameter
            $table->string('p_waktu_pencatatan_sebelum_start')->nullable();
            $table->string('p_waktu_pencatatan_sesudah_start')->nullable();
            $table->string('p_oil_pressure_sebelum_start')->nullable();
            $table->string('p_oil_pressure_sesudah_start')->nullable();
            $table->string('p_fuel_pressure_sebelum_start')->nullable();
            $table->string('p_fuel_pressure_sesudah_start')->nullable();
            $table->string('p_fuel_temprature_sebelum_start')->nullable();
            $table->string('p_fuel_temprature_sesudah_start')->nullable();
            $table->string('p_coolant_pressure_sebelum_start')->nullable();
            $table->string('p_coolant_pressure_sesudah_start')->nullable();
            $table->string('p_coolant_temprature_sebelum_start')->nullable();
            $table->string('p_coolant_temprature_sesudah_start')->nullable();
            $table->string('p_speed_sebelum_start')->nullable();
            $table->string('p_speed_sesudah_start')->nullable();
            $table->string('p_inlet_temprature_sebelum_start')->nullable();
            $table->string('p_inlet_temprature_sesudah_start')->nullable();
            $table->string('p_turbo_pleasure_sebelum_start')->nullable();
            $table->string('p_turbo_pleasure_sesudah_start')->nullable();
            $table->string('p_generator_breaker_sebelum_start')->nullable();
            $table->string('p_generator_breaker_sesudah_start')->nullable();
            $table->string('p_generator_voltage_sebelum_start')->nullable();
            $table->string('p_generator_voltage_sesudah_start')->nullable();
            $table->string('p_generator_frequency_sebelum_start')->nullable();
            $table->string('p_generator_frequency_sesudah_start')->nullable();
            $table->string('p_generator_current_sebelum_start')->nullable();
            $table->string('p_generator_current_sesudah_start')->nullable();
            $table->string('p_load_sebelum_start')->nullable();
            $table->string('p_load_sesudah_start')->nullable();
            $table->string('p_battery_charge_voltase_sebelum_start')->nullable();
            $table->string('p_battery_charge_voltase_sesudah_start')->nullable();
            $table->string('p_lube_oil_level_sebelum_start')->nullable();
            $table->string('p_lube_oil_level_sesudah_start')->nullable();
            $table->string('p_accu_level_sebelum_start')->nullable();
            $table->string('p_accu_level_sesudah_start')->nullable();
            $table->string('p_radiator_level_sebelum_start')->nullable();
            $table->string('p_radiator_level_sesudah_start')->nullable();
            $table->string('p_fuel_oil_level_sebelum_start')->nullable();
            $table->string('p_fuel_oil_level_sesudah_start')->nullable();
            $table->string('catatan')->nullable();
            //personal
            $table->string('k3_nama')->nullable();
            $table->string('k3_ttd')->nullable();
            $table->string('operator_nama')->nullable();
            $table->string('operator_ttd')->nullable();
            $table->string('supervisor_nama')->nullable();
            $table->string('supervisor_ttd')->nullable();

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
        Schema::dropIfExists('edg_blok2s');
    }
};
