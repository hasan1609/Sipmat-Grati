<?php

namespace App\Http\Controllers;

use App\Models\FFBlok1;
use App\Models\FFBlok2;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class FFblok2Controller extends Controller
{
    public function insert_ffblok(Request $request)
    {
        if ($request->tw == "I") {
            $date1 = "01-01-" . $request->tahun . "";
            $date2 = "30-03-" . $request->tahun . "";
        } elseif ($request->tw == "II") {
            $date1 = "01-04-" . $request->tahun . "";
            $date2 = "30-06-" . $request->tahun . "";
        } elseif ($request->tw == "III") {
            $date1 = "01-07-" . $request->tahun . "";
            $date2 = "30-09-" . $request->tahun . "";
        } else {
            $date1 = "01-10-" . $request->tahun . "";
            $date2 = "30-12-" . $request->tahun . "";
        }

        if ($request->hari == "Minggu") {
            $hari = 0;
        } elseif ($request->hari == "Senin") {
            $hari = 1;
        } elseif ($request->hari == "Selasa") {
            $hari = 2;
        } elseif ($request->hari == "Rabu") {
            $hari = 3;
        } elseif ($request->hari == "Kamis") {
            $hari = 4;
        } elseif ($request->hari == "Jumat") {
            $hari = 5;
        } else {
            $hari = 6;
        }
        // memecah bagian-bagian dari tanggal $date1
        $pecahTgl1 = explode("-", $date1);
        // membaca bagian-bagian dari $date1
        $tgl1 = $pecahTgl1[0];
        $bln1 = $pecahTgl1[1];
        $thn1 = $pecahTgl1[2];
        // counter looping
        $i = 0;
        // counter untuk jumlah hari minggu
        try {
            do {
                // mengenerate tanggal berikutnya
                $tanggal = date("d-m-Y", mktime(0, 0, 0, $bln1, $tgl1 + $i, $thn1));
                // cek jika harinya minggu, maka counter $sum bertambah satu, lalu tampilkan tanggalnya
                if (date("w", mktime(0, 0, 0, $bln1, $tgl1 + $i, $thn1)) == $hari) {
                    // $ar = explode("‘", "‘", $tangal);
                    $data = [
                        'tanggal_cek' => $tanggal,
                        'tw' => $request->tw,
                        'tahun' => $request->tahun,
                        'hari' => $request->hari
                    ];
                    FFBlok2::create($data);
                    $response = [
                        'message' => 'Post ffblok berhasil',
                        'sukses' => 1,
                        'data' => null
                    ];
                }
                // increment untuk counter looping
                $i++;
            } while ($tanggal != $date2);
            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            $response = [
                'message' => 'Post ffblok gagal',
                'status' => 0,
                'data' => $e->errorInfo
            ];

            return response()->json($response, Response::HTTP_OK);
        }
    }

    public function get_ffblok(Request $request)
    {

        $data = FFBlok2::where('tw', $request->input('tw'))
            ->where('tahun', $request->input('tahun'))
            ->orderBy('tanggal_cek', 'desc')
            ->get();

        $response = [
            'message' => 'Get ffblok berhasil',
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function gethasil_ffblok(Request $request)
    {

        $data = FFBlok2::where('tw', $request->input('tw'))
            ->where('tahun', $request->input('tahun'))
            ->whereNot('is_status', 0)

            ->orderBy('tanggal_cek', 'asc')
            ->get();

        $response = [
            'message' => 'Get sea water berhasil',
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function hapus_ffblok(Request $request)
    {
        $hapus = FFBlok2::where('id', $request->id)->delete();
        $response = [
            'message' => 'Post ffblok berhasil',
            'sukses' => 1,
            'data' => null
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function ffblok_pelaksana()
    {
        date_default_timezone_set("Asia/Jakarta");

        $tgl = date('d-m-Y');
        $data = FFBlok2::where('tanggal_cek', $tgl)
            ->whereNot('is_status', 2)
            ->get();

        $response = [
            'message' => 'Post ffblok berhasil',
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function update_ffblok(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => ['required']
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $data = $request->all();

        if ($request->file('k3_ttd')) {
            $data['k3_ttd'] = $request->file('k3_ttd')->store('foto-ffblok2', 'public');
        }

        if ($request->file('operator_ttd')) {
            $data['operator_ttd'] = $request->file('operator_ttd')->store('foto-ffblok2', 'public');
        }

        if ($request->file('supervisor_ttd')) {
            $data['supervisor_ttd'] = $request->file('supervisor_ttd')->store('foto-ffblok2', 'public');
        }

        $edit = FFBlok2::where('id', $request->id)->update($data);
        $response = [
            'message' => 'Post ffblok berhasil',
            'sukses' => 1,
            'data' => null
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    //admin return schedule
    public function return_ffblok(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => ['required']
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $update = FFBlok2::where('id', $request->id)
            ->update(['is_status' => 3]);

        $response = [
            'message' => 'Update apar berhasil',
            'sukses' => 1,
            'data' => null
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    //admin acc schedule
    public function acc_ffblok(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => ['required']
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $update = FFBlok2::where('id', $request->id)
            ->update(['is_status' => 2]);

        $response = [
            'message' => 'Update ffblok berhasil',
            'sukses' => 1,
            'data' => null
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }


    public function ffblok_pdf(Request $request)
    {
        $data = FFBlok2::where('id', $request->id)
            ->first();


        $pdf = Pdf::loadView(
            'ffblok2.ffblok2_pdf',
            [
                'ffblok2' => $data
            ]
        )->setPaper('a4', 'potrait');


        $content = $pdf->download()->getOriginalContent();
        Storage::put('public/csv/ffblok2/ffblok2.pdf', $content);
        $response = [
            'message' => 'sudah ffblok2 hari ini',
            'status' => 1,
            'data' => url('/') . '/storage/csv/ffblok2/ffblok2.pdf'
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
