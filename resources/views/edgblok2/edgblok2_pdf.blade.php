<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>


<body>
    <style type="text/css">
        .tg {
            border-spacing: 0;
            border: 1px;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 9px 4px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 9px 4px;
            word-break: normal;
        }

        .tg .tg-ieig {
            border-color: inherit;
            font-size: 12px;
            text-align: left;
            vertical-align: middle
        }

        .tg .tg-73a0 {
            border-color: inherit;
            font-size: 12px;
            text-align: left;
            vertical-align: top
        }

        .tg .tg-9o1m {
            border-color: inherit;
            font-size: 12px;
            text-align: center;
            vertical-align: middle
        }

        .tg .tg-f4iu {
            border-color: inherit;
            font-size: 12px;
            text-align: center;
            vertical-align: top
        }
    </style>
    <table class="tg">

        <tr>
            <th class="tg-9o1m" colspan="8">LOG SHEET TEST RUN</th>
        </tr>
        <tr>
            <th class="tg-9o1m" colspan="8">EDG BLOK 2</th>
        </tr>
        <tr>
            <th class="tg-9o1m" colspan="5">tanggal</th>
            <th class="tg-9o1m" colspan="3">{{ $edgblok2->tanggal_pemeriksa }}</th>
        </tr>
        <tr>
            <th class="tg-ieig" rowspan="2">NO</th>
            <th class="tg-ieig" rowspan="2" colspan="4">PARAMETER</th>
            <th class="tg-9o1m" rowspan="2">SATUAN</th>
            <th class="tg-9o1m" colspan="2">OPERASI ( minimal 20 menit )</th>
        </tr>
        <tr>
            <td class="tg-9o1m">sebelum start</td>
            <td class="tg-9o1m">sesudah start</td>
        </tr>
        <!-- plant 1-->
        <tr>
            <td>1</td>
            <td class="tg-ieig" colspan="5">Waktu Pencatatan</td>
            <td class="tg-9o1m">{{ $edgblok2->p_waktu_pencatatan_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_waktu_pencatatan_sesudah_start }}</td>
        </tr>
        <tr>
            <td>2</td>
            <td class="tg-ieig" colspan="4">Oil Pressure</td>
            <td class="tg-9o1m">Bar</td>
            <td class="tg-9o1m">{{ $edgblok2->p_oil_pressure_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_oil_pressure_sesudah_start }}</td>
        </tr>
        <tr>
            <td>3</td>
            <td class="tg-ieig" colspan="4">Fuel Pressure</td>
            <td class="tg-9o1m">Bar</td>
            <td class="tg-9o1m">{{ $edgblok2->p_fuel_pressure_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_fuel_pressure_sesudah_start }}</td>
        </tr>
        <tr>
            <td>4</td>
            <td class="tg-ieig" colspan="4">Fuel Temperature</td>
            <td class="tg-9o1m">C</td>
            <td class="tg-9o1m">{{ $edgblok2->p_fuel_temprature_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_fuel_temprature_sesudah_start }}</td>
        </tr>
        <tr>
            <td>5</td>
            <td class="tg-ieig" colspan="4">Coolant Pressure</td>
            <td class="tg-9o1m">Bar</td>
            <td class="tg-9o1m">{{ $edgblok2->p_coolant_pressure_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_coolant_pressure_sesudah_start }}</td>
        </tr>
        <tr>
            <td>6</td>
            <td class="tg-ieig" colspan="4">Coolant Temperature</td>
            <td class="tg-9o1m">C</td>
            <td class="tg-9o1m">{{ $edgblok2->p_coolant_temprature_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_coolant_temprature_sesudah_start }}</td>
        </tr>
        <tr>
            <td>7</td>
            <td class="tg-ieig" colspan="4">Speed</td>
            <td class="tg-9o1m">Rpm</td>
            <td class="tg-9o1m">{{ $edgblok2->p_speed_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_speed_sesudah_start }}</td>
        </tr>
        <tr>
            <td>8</td>
            <td class="tg-ieig" colspan="4">Inlent Temperature</td>
            <td class="tg-9o1m">C</td>
            <td class="tg-9o1m">{{ $edgblok2->p_inlet_temprature_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_inlet_temprature_sesudah_start }}</td>
        </tr>
        <tr>
            <td>9</td>
            <td class="tg-ieig" colspan="4">Turbo Pressure</td>
            <td class="tg-9o1m">Bar</td>
            <td class="tg-9o1m">{{ $edgblok2->p_turbo_pleasure_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_turbo_pleasure_sesudah_start }}</td>
        </tr>
        <tr>
            <td rowspan="4">10</td>
            <td class="tg-ieig" colspan="3" rowspan="4">Generator</td>
            <td class="tg-9o1m">Breaker</td>
            <td class="tg-9o1m">Open / Close</td>
            <td class="tg-9o1m">{{ $edgblok2->p_generator_breaker_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_generator_breaker_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Voltage</td>
            <td class="tg-9o1m">V</td>
            <td class="tg-9o1m">{{ $edgblok2->p_generator_voltage_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_generator_voltage_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Frequency</td>
            <td class="tg-9o1m">Hz</td>
            <td class="tg-9o1m">{{ $edgblok2->p_generator_frequency_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_generator_frequency_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Current</td>
            <td class="tg-9o1m">A</td>s
            <td class="tg-9o1m">{{ $edgblok2->p_generator_current_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_generator_current_sesudah_start }}</td>
        </tr>
        <tr>
            <td>11</td>
            <td class="tg-ieig" colspan="4">Load</td>
            <td class="tg-9o1m">KW</td>
            <td class="tg-9o1m">{{ $edgblok2->p_load_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_load_sesudah_start }}</td>
        </tr>
        <tr>
            <td>12</td>
            <td class="tg-ieig" colspan="4">Battery Charge Voltage</td>
            <td class="tg-9o1m">V</td>
            <td class="tg-9o1m">{{ $edgblok2->p_battery_charge_voltase_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_battery_charge_voltase_sesudah_start }}</td>
        </tr>
        <tr>
            <td>13</td>
            <td class="tg-ieig" colspan="4">Lube Oil Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">{{ $edgblok2->p_lube_oil_level_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_lube_oil_level_sesudah_start }}</td>
        </tr>
        <tr>
            <td>14</td>
            <td class="tg-ieig" colspan="4">Accu Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">{{ $edgblok2->p_accu_level_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_accu_level_sesudah_start }}</td>
        </tr>
        <tr>
            <td>15</td>
            <td class="tg-ieig" colspan="4">Radiator Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">{{ $edgblok2->p_radiator_level_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_radiator_level_sesudah_start }}</td>
        </tr>
        <tr>
            <td>16</td>
            <td class="tg-ieig" colspan="4">Fuel Oil Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">{{ $edgblok2->p_fuel_oil_level_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok2->p_fuel_oil_level_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-73a0" colspan="8"><span style="font-weight:bold"> Keterangan : </span> L : Low N :
                Normal H : Hight F : Full <br> <br> Catatan : {{ $edgblok2->catatan }} </td>
        </tr>


        <tr>

            <td class="tg-f4iu " colspan="2" style="background-color: darkgray"><b>SHIFT</b></td>
            <td class="tg-f4iu" style="background-color: darkgray"><b>K3</b></td>
            <td class="tg-f4iu" colspan="3" style="background-color: darkgray"><b>OPERATOR</b></td>
            <td class="tg-f4iu" colspan="2" style="background-color: darkgray"><b>SUPERVISOR</b></td>
        </tr>
        <tr>
            <td class="tg-9o1m" colspan="2" rowspan="2">{{ $edgblok2->shift }}</td>
            <td class="tg-f4iu"><img src="{{ public_path('storage/' . $edgblok2->k3_ttd) }}" alt=""
                    style="width:100px ; height:100px"><br><br><br></td>
            <td class="tg-f4iu" colspan="3"><img src="{{ public_path('storage/' . $edgblok2->operator_ttd) }}"
                    style="width:100px ; height:100px" alt=""></td>
            <td class="tg-f4iu" colspan="2"><img src="{{ public_path('storage/' . $edgblok2->supervisor_ttd) }}"
                    style="width:100px ; height:100px" alt=""></td>
        </tr>
        <tr>
            <td class="tg-f4iu">{{ $edgblok2->k3_nama }}</td>
            <td class="tg-f4iu" colspan="3">{{ $edgblok2->operator_nama }}</td>
            <td class="tg-f4iu" colspan="2">{{ $edgblok2->supervisor_nama }}</td>
        </tr>

    </table>
</body>

</html>
