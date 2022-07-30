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
    <h3 align="center">LOG SHEET K3</h3>
    <h3 align="center">PEMERIKSAAN FASILITAS MOBIL DAMKAR</h3>
    <table>
        <tr>
            <td><b>Shift</b></td>
            <td><b>:</b></td>
            <td><b>{{ $item->shift }}</b></td>
        </tr>
        <tr>
            <td><b>Tanggal Pengecekan</b></td>
            <td><b>:</b></td>
            <td><b>{{ $item->tanggal_pemeriksa }}</b></td>
        </tr>
    </table>
    <br>
    <table class="tg">
        <tr style="background-color: #a8b4ae;">
            <th>No</th>
            <th>Parameter</th>
            <th>Hasil</th>
            <th>Catatan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Start</td>
            <td>{{ $item->start }}</td>
            <td rowspan="24">{{ $item->catatan }}</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Stop</td>
            <td>{{ $item->stop }}</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Air Accu</td>
            <td>{{ $item->air_accu }}</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Level Air Radiator</td>
            <td>{{ $item->level_air_radiator }}</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Temperature Mesin</td>
            <td>{{ $item->tempratur_mesin }}</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Level Oil</td>
            <td>{{ $item->level_oil }}</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Filter Soalr</td>
            <td>{{ $item->filter_solar }}</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Level Minyak Rem</td>
            <td>{{ $item->level_minyak_rem }}</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Suara Mesin</td>
            <td>{{ $item->suara_mesin }}</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Lampu Depan</td>
            <td>{{ $item->lampu_depan }}</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Lampu Belakang</td>
            <td>{{ $item->lampu_belakang }}</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Lampu Rem</td>
            <td>{{ $item->lampu_rem }}</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Lampu Sein Kanan Depan</td>
            <td>{{ $item->lampu_sein_kanan_depan }}</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Lampu Sein Kiri Depan</td>
            <td>{{ $item->lampu_sein_kiri_depan }}</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Lampu Sein Kanan Belakang</td>
            <td>{{ $item->lampu_sein_kanan_belakang }}</td>
        </tr>
        <tr>
            <td>16</td>
            <td>Lampu Sein Kiri Belakang</td>
            <td>{{ $item->lampu_sein_kiri_belakang }}</td>
        </tr>
        <tr>
            <td>17</td>
            <td>Lampu Hazard</td>
            <td>{{ $item->lampu_hazard }}</td>
        </tr>
        <tr>
            <td>18</td>
            <td>Lampu Sorot</td>
            <td>{{ $item->lampu_sorot }}</td>
        </tr>
        <tr>
            <td>19</td>
            <td>Lampu Dalam Depan</td>
            <td>{{ $item->lampu_dalam_depan }}</td>
        </tr>
        <tr>
            <td>20</td>
            <td>Lampu Dalam Tengah</td>
            <td>{{ $item->lampu_dalam_tengah }}</td>
        </tr>
        <tr>
            <td>21</td>
            <td>Lampu Dalam Belakang</td>
            <td>{{ $item->lampu_dalam_belakang }}</td>
        </tr>
        <tr>
            <td>22</td>
            <td>Wiper</td>
            <td>{{ $item->wiper }}</td>
        </tr>
        <tr>
            <td>23</td>
            <td>Spion</td>
            <td>{{ $item->spion }}</td>
        </tr>
        <tr>
            <td>24</td>
            <td>Sirine</td>
            <td>{{ $item->sirine }}</td>
        </tr>

    </table>

    <br><br>
    <table>
        <tr>
            <td rowspan="4">Mengetahui<br><br>{{ $jabatan }}<br><br><br>
                <img src="{{ public_path('storage/ttd-apar/apar-ttd.png') }}" alt="Image" width="100"
                    height="100">
                <br>{{ $nama }}
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
    </table>
</body>

</html>
