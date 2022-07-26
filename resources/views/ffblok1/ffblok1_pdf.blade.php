<?php
function tgl_indo($tanggal)
{
    $bulan = [
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
    ];
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

?>
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
            <th class="tg-9o1m" colspan="8">FIRE FIGHTING BLOK 1 SERVICE PUMP &AMP; MOTOR DRIVEN &amp; DIESEL ENGINE
            </th>
        </tr>
        <tr>
            <th class="tg-9o1m"colspan="2">Tanggal</th>
            <th class="tg-9o1m" colspan="6">{{ $ffblok1->tanggal_pemeriksa }}</th>
        </tr>
        <tr>
            <td class="tg-9o1m" rowspan="2">NO</td>
            <td class="tg-9o1m" rowspan="2">PLANT</td>
            <td class="tg-ieig" rowspan="2">PARAMETER</td>
            <td class="tg-9o1m" rowspan="2">PERFORM</td>
            <td class="tg-9o1m" rowspan="2">SATUAN</td>
            <td class="tg-9o1m" colspan="3">OPERASI ( minimal 20 menit )</td>
        </tr>
        <tr>
            <td class="tg-9o1m" colspan="2">sebelum start</td>
            <td class="tg-9o1m">sesudah start</td>
        </tr>
        <!-- plant 1-->
        <tr>
            <td class="tg-9o1m" rowspan="5">1</td>
            <td class="tg-9o1m" rowspan="5">FIRE FIGHTING<br> SERVICE PUMP<br></td>
            <td class="tg-ieig" colspan="3">waktu pencatatan</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->sp_waktu_pencatatan_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->sp_waktu_pencatatan_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Suction Press</td>
            <td class="tg-9o1m">0,5</td>
            <td class="tg-9o1m">Kg/Cm</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->sp_suction_press_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->sp_suction_press_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Discharge Press</td>
            <td class="tg-9o1m">12,5</td>
            <td class="tg-9o1m">Kg/Cm</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->sp_discharge_press_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->sp_discharge_press_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Fuel level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->sp_fuel_level_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->sp_fuel_level_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Auto Start</td>
            <td class="tg-9o1m">11</td>
            <td class="tg-9o1m">Kg/Cm</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->sp_auto_start_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->sp_auto_start_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m" colspan="8" style="background-color: darkgray"></td>

        </tr>
        <!-- plant 2-->
        <tr>
            <td class="tg-9o1m" rowspan="5">2</td>
            <td class="tg-9o1m" rowspan="5">FIRE FIGHTING<br> MOTOR DRIVEN<br></td>
            <td class="tg-ieig" colspan="3">waktu pencatatan</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->md_waktu_pencatatan_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->md_waktu_pencatatan_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Suction Press</td>
            <td class="tg-9o1m">14,7</td>
            <td class="tg-9o1m">Kg/Cm</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->md_suction_press_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->md_suction_press_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Discharge Press</td>
            <td class="tg-9o1m">175</td>
            <td class="tg-9o1m">Kg/Cm</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->md_discharge_press_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->md_discharge_press_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Fuel level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->md_full_level_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->md_full_level_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Auto Start</td>
            <td class="tg-9o1m">9</td>
            <td class="tg-9o1m">Kg/Cm</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->md_auto_start_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->md_auto_start_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m" colspan="8" style="background-color: darkgray"></td>

        </tr>
        <!-- plant 3 -->
        <tr>
            <td class="tg-ieig" rowspan="12">3</td>
            <td class="tg-9o1m" rowspan="12">FIRE FIGHTING <br>DIESEL ENGINE</td>
            <td class="tg-9o1m" colspan="3">Waktu Pencatatan</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_waktu_pencatatan_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_waktu_pencatatan_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Lube Oil Press</td>
            <td class="tg-9o1m">75</td>
            <td class="tg-9o1m">Psi</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_lube_oil_press_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_lube_oil_press_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Battery Voltage</td>
            <td class="tg-9o1m">26</td>
            <td class="tg-9o1m">V</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_battery_voltage_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_battery_voltage_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Battery Ampere</td>
            <td class="tg-9o1m">4</td>
            <td class="tg-9o1m">A</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_battery_ampere_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_battery_ampere_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Battery Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_battery_level_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_battery_level_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-9o1m">Fuel level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_fuel_level_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_fuel_level_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Lube Oil Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_lube_oil_level_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_lube_oil_level_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Water Cooler Level</td>
            <td class="tg-9o1m">N</td>
            <td class="tg-9o1m">-</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_water_cooler_level_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_water_cooler_level_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Speed</td>
            <td class="tg-9o1m">2100</td>
            <td class="tg-9o1m">Rpm</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_speed_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_speed_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Suction Press</td>
            <td class="tg-9o1m">14,7</td>
            <td class="tg-9o1m">Psd</td>
            <td class="tg-9o1m" colspan="2">
                {{ $ffblok1->de_suction_press_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_suction_press_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Discharge Press</td>
            <td class="tg-9o1m">175</td>
            <td class="tg-9o1m">Psi</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_discharge_press_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_discharge_press_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-ieig">Auto Start</td>
            <td class="tg-9o1m">8,5</td>
            <td class="tg-9o1m">Kg/Cm</td>
            <td class="tg-9o1m" colspan="2">{{ $ffblok1->de_auto_start_sebelum_start }}</td>
            <td class="tg-9o1m">{{ $ffblok1->de_auto_start_sesudah_start }}</td>
        </tr>
        <tr>
            <td class="tg-73a0" colspan="8" rowspan="8"><span style="font-weight:bold"> Keterangan : </span> L
                : Low N : Normal H : Hight F : Full <br> <br> Catatan : {{ $ffblok1->catatan }} </td>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>

        <tr>
            <td class="tg-f4iu " colspan="2" style="background-color: darkgray"><b>SHIFT</b></td>
            <td class="tg-f4iu" style="background-color: darkgray"><b>K3</b></td>
            <td class="tg-f4iu" colspan="3" style="background-color: darkgray"><b>OPERATOR</b></td>
            <td class="tg-f4iu" colspan="2" style="background-color: darkgray"><b>SUPERVISOR</b></td>
        </tr>
        <tr>
            <td class="tg-9o1m" colspan="2" rowspan="2">{{ $ffblok1->shift }}</td>
            <td class="tg-f4iu"><img src="{{ public_path('storage/' . $ffblok1->k3_ttd) }}" alt=""
                    style="width:100px ; height:100px"><br><br><br></td>
            <td class="tg-f4iu" colspan="3"><img src="{{ public_path('storage/' . $ffblok1->operator_ttd) }}"
                    style="width:100px ; height:100px" alt=""></td>
            <td class="tg-f4iu" colspan="2"><img src="{{ public_path('storage/' . $ffblok1->supervisor_ttd) }}"
                    style="width:100px ; height:100px" alt=""></td>
        </tr>
        <tr>
            <td class="tg-f4iu">{{ $ffblok1->k3_nama }}</td>
            <td class="tg-f4iu" colspan="3">{{ $ffblok1->operator_nama }}</td>
            <td class="tg-f4iu" colspan="2">{{ $ffblok1->supervisor_nama }}</td>
        </tr>

    </table>
</body>

</html>
