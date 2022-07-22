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
        Schema::create('edg_blok1s', function (Blueprint $table) {
            $table->id();
            $table->string('tw');
            $table->string('tahun');
            $table->string('hari');
            $table->date('tanggal_pemeriksa')->nullable();
            $table->string('tanggal_cek')->nullable();
            $table->string('shift')->nullable();
            $table->integer('is_status')->default(0);
            //parameter
            $table->string('p_waktu_pencatatan_sebelum_start')->nullable();
            $table->string('p_waktu_pencatatan_sesudah_start')->nullable();
            $table->string('p_oil_pressure_sebelum_start')->nullable();
            $table->string('p_oil_pressure_sesudah_start')->nullable();
            $table->string('p_oil_temprature_sebelum_start')->nullable();
            $table->string('p_oil_temprature_sesudah_start')->nullable();
            $table->string('p_water_temprature_sebelum_start')->nullable();
            $table->string('p_water_temprature_sesudah_start')->nullable();
            $table->string('p_speed_sebelum_start')->nullable();
            $table->string('p_speed_sesudah_start')->nullable();
            $table->string('p_hour_meter_1_sebelum_start')->nullable();
            $table->string('p_hour_meter_1_sesudah_start')->nullable();
            $table->string('p_hour_meter_2_sebelum_start')->nullable();
            $table->string('p_hour_meter_2_sesudah_start')->nullable();
            $table->string('p_main_line_voltage_sebelum_start')->nullable();
            $table->string('p_main_line_voltage_sesudah_start')->nullable();
            $table->string('p_main_line_frequency_sebelum_start')->nullable();
            $table->string('p_main_line_frequency_sesudah_start')->nullable();
            $table->string('p_generator_breaker_sebelum_start')->nullable();
            $table->string('p_generator_breaker_sesudah_start')->nullable();
            $table->string('p_generator_voltage_sebelum_start')->nullable();
            $table->string('p_generator_voltage_sesudah_start')->nullable();
            $table->string('p_generator_frequency_sebelum_start')->nullable();
            $table->string('p_generator_frequency_sesudah_start')->nullable();
            $table->string('p_load_current_sebelum_start')->nullable();
            $table->string('p_load_current_sesudah_start')->nullable();
            $table->string('p_daya_sebelum_start')->nullable();
            $table->string('p_daya_sesudah_start')->nullable();
            $table->string('p_cos_sebelum_start')->nullable();
            $table->string('p_cos_sesudah_start')->nullable();
            $table->string('p_battery_charge_voltase_sebelum_start')->nullable();
            $table->string('p_battery_charge_voltase_sesudah_start')->nullable();
            $table->string('p_hour_sebelum_start')->nullable();
            $table->string('p_hour_sesudah_start')->nullable();
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
        Schema::dropIfExists('edg_blok1s');
    }
};
