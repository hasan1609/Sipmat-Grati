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
        Schema::create('edg_blok3s', function (Blueprint $table) {
            $table->id();
            $table->string('tw');
            $table->string('tahun');
            $table->string('hari');
            $table->date('tanggal_pemeriksa')->nullable();
            $table->string('tanggal_cek')->nullable();
            $table->string('shift')->nullable();
            $table->integer('is_status')->default(0);
            //Service Pump
            $table->string('oil_press_sebelum_start')->nullable();
            $table->string('oil_press_sesudah_start')->nullable();
            $table->string('oil_temp_sebelum_start')->nullable();
            $table->string('oil_temp_sesudah_start')->nullable();
            $table->string('water_cool_temp_sebelum_start')->nullable();
            $table->string('water_cool_temp_sesudah_start')->nullable();
            $table->string('speed_sebelum_start')->nullable();
            $table->string('speed_sesudah_start')->nullable();
            $table->string('hour_meter_sebelum_start')->nullable();
            $table->string('hour_meter_sesudah_start')->nullable();
            $table->string('ml_voltage_sebelum_start')->nullable();
            $table->string('ml_voltage_sesudah_start')->nullable();
            $table->string('ml_freq_sebelum_start')->nullable();
            $table->string('ml_freq_sesudah_start')->nullable();
            $table->string('gen_break_sebelum_start')->nullable();
            $table->string('gen_break_sesudah_start')->nullable();
            $table->string('gen_vol_sebelum_start')->nullable();
            $table->string('gen_vol_sesudah_start')->nullable();
            $table->string('gen_freq_sebelum_start')->nullable();
            $table->string('gen_freq_sesudah_start')->nullable();
            $table->string('load_cur_sebelum_start')->nullable();
            $table->string('load_cur_sesudah_start')->nullable();
            $table->string('daya_sebelum_start')->nullable();
            $table->string('daya_sesudah_start')->nullable();
            $table->string('cos_sebelum_start')->nullable();
            $table->string('cos_sesudah_start')->nullable();
            $table->string('bat_charge_vol_sebelum_start')->nullable();
            $table->string('bat_charge_vol_sesudah_start')->nullable();
            $table->string('hour_sebelum_start')->nullable();
            $table->string('hour_sesudah_start')->nullable();
            $table->string('lube_oil_sebelum_start')->nullable();
            $table->string('lube_oil_sesudah_start')->nullable();
            $table->string('accu_sebelum_start')->nullable();
            $table->string('accu_sesudah_start')->nullable();
            $table->string('radiator_sebelum_start')->nullable();
            $table->string('radiator_sesudah_start')->nullable();
            $table->string('fuel_oil_sebelum_start')->nullable();
            $table->string('fuel_oil_sesudah_start')->nullable();
            $table->string('temp_bearing_gen_sebelum_start')->nullable();
            $table->string('temp_bearing_gen_sesudah_start')->nullable();
            $table->string('tamp_winding_u_sebelum_start')->nullable();
            $table->string('tamp_winding_u_sesudah_start')->nullable();
            $table->string('temp_winding_v_sebelum_start')->nullable();
            $table->string('temp_winding_v_sesudah_start')->nullable();
            $table->string('temp_winding_w_sebelum_start')->nullable();
            $table->string('temp_winding_w_sesudah_start')->nullable();
            $table->string('belt_radiator_fan_sebelum_start')->nullable();
            $table->string('belt_radiator_fan_sesudah_start')->nullable();

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
        Schema::dropIfExists('edg_blok3s');
    }
};
