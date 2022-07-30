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
            <th class="tg-9o1m" colspan="8">EMERGENCY DIESEL GENERATOR BLOK 3</th>
        </tr>
        <tr>
            <th class="tg-9o1m" colspan="5">tanggal</th>
            <th class="tg-9o1m" colspan="3">{{ $edgblok3->tanggal_pemeriksa }}</th>
        </tr>
        <tr>
            <th class="tg-ieig" rowspan="2">NO</th>
            <th class="tg-ieig" rowspan="2" colspan="3">PARAMETER</th>
            <th class="tg-9o1m" rowspan="2">SATUAN</th>
            <th class="tg-9o1m" rowspan="2">OPERASI RANGE</th>
            <th class="tg-9o1m" colspan="2">WAKTU PENCATATAN</th>
        </tr>
        <tr>
            <td class="tg-9o1m">sebelum start</td>
            <td class="tg-9o1m">sesudah start</td>
        </tr>
        <!-- plant 1-->
        <tr>
            <td>1</td>
            <td class="tg-ieig" colspan="3">Oil Pressure</td>
            <td class="tg-9o1m">Bar</td>
            <td class="tg-9o1m">5.5 - 8</td>
            <td class="tg-9o1m">{{ $edgblok3->oil_press_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->oil_press_sesudah_start }}</td>
        </tr>
        <tr>
            <td>2</td>
            <td class="tg-ieig" colspan="3">Oil Temperature</td>
            <td class="tg-9o1m">C</td>
            <td class="tg-9o1m">45 - 80</td>
            <td class="tg-9o1m">{{ $edgblok3->oil_temp_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->oil_temp_sesudah_start }}</td>
        </tr>
        <tr>
            <td>3</td>
            <td class="tg-ieig" colspan="3">Water/Coolant Temperature</td>
            <td class="tg-9o1m">C</td>
            <td class="tg-9o1m">45 - 80</td>
            <td class="tg-9o1m">{{ $edgblok3->water_cool_temp_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->water_cool_temp_sesudah_start }}</td>
        </tr>
        <tr>
            <td>4</td>
            <td class="tg-ieig" colspan="3">Speed</td>
            <td class="tg-9o1m">RPM</td>
            <td class="tg-9o1m">1450 - 1550</td>
            <td class="tg-9o1m">{{ $edgblok3->speed_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->speed_sesudah_start }}</td>
        </tr>
        <tr>
            <td>5</td>
            <td class="tg-ieig" colspan="3">HOUR METER</td>
            <td class="tg-9o1m">H</td>
            <td class="tg-9o1m">0 - 200</td>
            <td class="tg-9o1m">{{ $edgblok3->hour_meter_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->hour_meter_sesudah_start }}</td>
        </tr>
        <tr>
            <td rowspan="2">6</td>
            <td class="tg-ieig" colspan="2" rowspan="2">Main Line</td>
            <td class="tg-9o1m">Voltager</td>
            <td class="tg-9o1m">V</td>
            <td class="tg-9o1m">360 - 400</td>
            <td class="tg-9o1m">{{ $edgblok3->ml_voltage_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->ml_voltage_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Frequency</td>
            <td class="tg-9o1m">Hz</td>
            <td class="tg-9o1m">48.5 - 51.5</td>
            <td class="tg-9o1m">{{ $edgblok3->ml_freq_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->ml_freq_sesudah_start }}</td>
        </tr>
        <tr>
            <td rowspan="3">7</td>
            <td class="tg-ieig" colspan="2" rowspan="3">Generator</td>
            <td class="tg-9o1m">Breaker</td>
            <td class="tg-9o1m">Open / Close</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m">{{ $edgblok3->gen_break_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->gen_break_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Voltage</td>
            <td class="tg-9o1m">V</td>
            <td class="tg-9o1m">360 - 400</td>
            <td class="tg-9o1m">{{ $edgblok3->gen_vol_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->gen_vol_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Frequency</td>
            <td class="tg-9o1m">Hz</td>
            <td class="tg-9o1m">48.5 - 51.5</td>
            <td class="tg-9o1m">{{ $edgblok3->gen_freq_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->gen_freq_sesudah_start }}</td>
        </tr>
        <tr>
            <td>8</td>
            <td class="tg-ieig" colspan="3">Load Current</td>
            <td class="tg-9o1m">A</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m">{{ $edgblok3->load_cur_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->load_cur_sesudah_start }}</td>
        </tr>
        <tr>
            <td>9</td>
            <td class="tg-ieig" colspan="3">Daya</td>
            <td class="tg-9o1m">KW</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m">{{ $edgblok3->daya_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->daya_sesudah_start }}</td>
        </tr>
        <tr>
            <td>10</td>
            <td class="tg-ieig" colspan="3">COS</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m">0,9 - 1</td>
            <td class="tg-9o1m">{{ $edgblok3->cos_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->cos_sesudah_start }}</td>
        </tr>
        <tr>
            <td>11</td>
            <td class="tg-ieig" colspan="3">Battery Charge Voltage</td>
            <td class="tg-9o1m">V</td>
            <td class="tg-9o1m">24 - 30</td>
            <td class="tg-9o1m">{{ $edgblok3->bat_charge_vol_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->bat_charge_vol_sesudah_start }}</td>
        </tr>
        <tr>
            <td>12</td>
            <td class="tg-ieig" colspan="3">Hour</td>
            <td class="tg-9o1m">H</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m">{{ $edgblok3->hour_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->hour_sesudah_start }}</td>
        </tr>
        <tr>
            <td>13</td>
            <td class="tg-ieig" colspan="3">Lube Oil Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">{{ $edgblok3->lube_oil_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->lube_oil_sesudah_start }}</td>
        </tr>
        <tr>
            <td>14</td>
            <td class="tg-ieig" colspan="3">Accu Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">{{ $edgblok3->accu_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->accu_sesudah_start }}</td>
        </tr>
        <tr>
            <td>15</td>
            <td class="tg-ieig" colspan="3">Radiator Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">{{ $edgblok3->radiator_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->radiator_sesudah_start }}</td>
        </tr>
        <tr>
            <td>16</td>
            <td class="tg-ieig" colspan="3">Fuel Oil Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">{{ $edgblok3->fuel_oil_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->fuel_oil_sesudah_start }}</td>
        </tr>
        <tr>
            <td>17</td>
            <td class="tg-ieig" colspan="3">Temp. Bearing Generator</td>
            <td class="tg-9o1m">C</td>
            <td class="tg-9o1m">24 - 80</td>
            <td class="tg-9o1m">{{ $edgblok3->temp_bearing_gen_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->temp_bearing_gen_sesudah_start }}</td>
        </tr>
        <tr>
            <td>18</td>
            <td class="tg-ieig" colspan="3">Temp. Winding U</td>
            <td class="tg-9o1m">C</td>
            <td class="tg-9o1m">24 - 80</td>
            <td class="tg-9o1m">{{ $edgblok3->tamp_winding_u_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->tamp_winding_u_sesudah_start }}</td>
        </tr>
        <tr>
            <td>19</td>
            <td class="tg-ieig" colspan="3">Temp. Winding V</td>
            <td class="tg-9o1m">C</td>
            <td class="tg-9o1m">24 - 80</td>
            <td class="tg-9o1m">{{ $edgblok3->temp_winding_v_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->temp_winding_v_sesudah_start }}</td>
        </tr>
        <tr>
            <td>20</td>
            <td class="tg-ieig" colspan="3">Temp. Winding W</td>
            <td class="tg-9o1m">C</td>
            <td class="tg-9o1m">24 - 80</td>
            <td class="tg-9o1m">{{ $edgblok3->temp_winding_w_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->temp_winding_w_sesudah_start }}</td>
        </tr>
        <tr>
            <td>21</td>
            <td class="tg-ieig" colspan="3">Belt Radiator Fan</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m">{{ $edgblok3->belt_radiator_fan_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $edgblok3->belt_radiator_fan_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-73a0" colspan="8"><span style="font-weight:bold"> Keterangan : </span> L : Low N :
                Normal H : Hight F : Full <br> <br> Catatan : {{ $edgblok3->catatan }} </td>
        </tr>


        <tr>

            <td class="tg-f4iu " colspan="2" style="background-color: darkgray"><b>SHIFT</b></td>
            <td class="tg-f4iu" style="background-color: darkgray"><b>K3</b></td>
            <td class="tg-f4iu" colspan="3" style="background-color: darkgray"><b>OPERATOR</b></td>
            <td class="tg-f4iu" colspan="2" style="background-color: darkgray"><b>SUPERVISOR</b></td>
        </tr>
        <tr>
            <td class="tg-9o1m" colspan="2" rowspan="2">{{ $edgblok3->shift }}</td>
            <td class="tg-f4iu"><img src="{{ public_path('storage/' . $edgblok3->k3_ttd) }}" alt=""
                    style="width:100px ; height:100px"><br><br><br></td>
            <td class="tg-f4iu" colspan="3"><img src="{{ public_path('storage/' . $edgblok3->operator_ttd) }}"
                    style="width:100px ; height:100px" alt=""></td>
            <td class="tg-f4iu" colspan="2"><img src="{{ public_path('storage/' . $edgblok3->supervisor_ttd) }}"
                    style="width:100px ; height:100px" alt=""></td>
        </tr>
        <tr>
            <td class="tg-f4iu">{{ $edgblok3->k3_nama }}</td>
            <td class="tg-f4iu" colspan="3">{{ $edgblok3->operator_nama }}</td>
            <td class="tg-f4iu" colspan="2">{{ $edgblok3->supervisor_nama }}</td>
        </tr>

    </table>
</body>

</html>
