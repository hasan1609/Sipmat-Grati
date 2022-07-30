@php
$no = 1;
@endphp
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
    <h3 align="center">PEMERIKSAAN FASILITAS MOBIL AMBULANCE</h3>
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
    <table class="tg">
        <tr style="background-color: #a8b4ae;">
            <th>No</th>
            <th>Parameter</th>
            <th>Hasil</th>
            <th>Catatan</th>
        </tr>
        <tr>
            <td rowspan="2">1</td>
            <td>Tabung Oksigen</td>
            <td>{{ $item->tabung_oksigen }}</td>
            <td rowspan="17">{{ $item->catatan }}</td>
        </tr>
        <tr>
            <td>Tekanan</td>
            <td>{{ $item->to_tekanan }}</td>
        </tr>
        <tr>
            <td rowspan="3">2</td>
            <td>APAR</td>
            <td>{{ $item->apar }}</td>
        </tr>
        <tr>
            <td>Tekanan</td>
            <td>{{ $item->a_tekanan }}</td>
        </tr>
        <tr>
            <td>Kondisi Fisik</td>
            <td>{{ $item->kondisi_fisik }}</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Cairan Infus</td>
            <td>{{ $item->cairan_infus }}</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Perlak /Alas</td>
            <td>{{ $item->perlak }}</td>
        </tr>
        <tr>
            <td rowspan="4">5</td>
            <td>Tandu Dorong</td>
            <td>{{ $item->tandu_dorong }}</td>
        </tr>
        <tr>
            <td>Kebersihan</td>
            <td>{{ $item->kebersihan }}</td>
        </tr>
        <tr>
            <td>Roda</td>
            <td>{{ $item->roda }}</td>
        </tr>
        <tr>
            <td>Spons Kasur</td>
            <td>{{ $item->spons_kasur }}</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Tandu Lipat</td>
            <td>{{ $item->tandu_lipat }}</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Air Wastafel</td>
            <td>{{ $item->air_wastafel }}</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Atiseptic Gel</td>
            <td>{{ $item->antiseptic_gel }}</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Tisu kering</td>
            <td>{{ $item->tisu_kering }}</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Oxycan</td>
            <td>{{ $item->oxycan }}</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Tas P3K</td>
            <td>{{ $item->tas_p3k }}</td>
        </tr>
    </table>

    <br><br>
    <table>
        <tr>
            <td rowspan="4">Mengetahui<br><br>{{ $jabatan }}<br><br><br>
                <img src="{{ public_path('storage/ttd-ambulance/ambulance-ttd.png') }}" alt="Image" width="100"
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
