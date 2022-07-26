<?php

namespace App\Http\Controllers;

use App\Models\ScheduleKebisingan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ScheduleKebisinganController extends Controller
{
    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_kebisingan' => ['required'],
            'tw' => ['required'],
            'tahun' => ['required'],
            'tanggal_cek' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $kode = explode("n", $request->kode_kebisingan);
            if (is_countable($kode) && count($kode) > 0) {
                foreach ($kode as $key => $val) {
                    $data = array(
                        'kode_kebisingan' => $kode[$key],
                        'tw' => $request->tw,
                        'tahun' => $request->tahun,
                        'tanggal_cek' => $request->tanggal_cek
                    );
                    ScheduleKebisingan::create($data);
                }
                $response = [
                    'message' => 'Post kebisingan berhasil',
                    'sukses' => 1,
                    'data' => null
                ];

                return response()->json($response, Response::HTTP_CREATED);
            }
            // $rrr = [$rr];

        } catch (QueryException $e) {
            $response = [
                'message' => 'Post kebisingan gagal',
                'status' => 0,
                'data' => $e->errorInfo
            ];

            return response()->json($response, Response::HTTP_OK);
        }
    }

    public function getschedule(Request $request)
    {

        $data = ScheduleKebisingan::where('tw', $request->input('tw'))
            ->where('tahun', $request->input('tahun'))
            ->with('kebisingan')
            ->orderBy('tanggal_cek', 'desc')
            ->get();

        $response = [
            'message' => 'Post kebisingan berhasil',
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function hapus_schedule(Request $request)
    {
        $hapus = ScheduleKebisingan::where('id', $request->id)->delete();
        $response = [
            'message' => 'Post kebisingan berhasil',
            'sukses' => 1,
            'data' => null
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    // jika user sudah mensetujui
    public function gethasil(Request $request)
    {
        $data = ScheduleKebisingan::where('tw', $request->input('tw'))
            ->where('tahun', $request->input('tahun'))
            // ->whereNot('is_status', 0)
            ->with('kebisingan')
            ->orderBy('tanggal_cek', 'desc')
            ->get();


        $response = [
            'message' => 'Post kebisingan berhasil',
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function updateschedule(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => ['required']
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $plus = $request->dbx1 + $request->dbx2 + $request->dbx3;
        $bagi = $plus / 3;
        $data = $request->all();
        $data['dbrata2'] = $bagi;
        $edit = DB::table('schedule_kebisingans')->where('id', $request->id)->update($data);
        $response = [
            'message' => 'Post kebisingan berhasil',
            'sukses' => 1,
            'data' => null
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    //admin acc schedule
    public function acc_kebisingan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => ['required']
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $update = ScheduleKebisingan::where('id', $request->id)
            ->update(['is_status' => 2]);

        $response = [
            'message' => 'Update kebisingan berhasil',
            'sukses' => 1,
            'data' => null
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    //admin return schedule
    public function return_kebisingan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => ['required']
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $update = ScheduleKebisingan::where('id', $request->id)
            ->update(['is_status' => 3]);

        $response = [
            'message' => 'Update kebisingan berhasil',
            'sukses' => 1,
            'data' => null
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }

    public function getschedule_pelaksana_kebisingan()
    {
        date_default_timezone_set("Asia/Jakarta");

        $tgl = date('Y-m-d');
        $data = ScheduleKebisingan::where('tanggal_cek', $tgl)
            ->whereNot('is_status', 2)
            ->with('kebisingan')
            ->orderBy('tanggal_cek', 'desc')
            ->get();

        $response = [
            'message' => 'Post kebisingan berhasil',
            'data' => $data
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }


    public function kebisingan_pdf(Request $request)
    {
        $ekstensi = $request->file('foto')->getClientOriginalExtension();
        $foto = $request->file('foto')->storeAs('public/ttd-kebisingan', 'kebisingan-ttd.png');
        $data = ScheduleKebisingan::where('tw', $request->tw)
            ->where('tahun', $request->tahun)
            ->where('is_status', 2)
            ->with('kebisingan')
            ->get();

        $jabatan = $request->jabatan;
        $nama = $request->nama;

        $pdf = Pdf::loadView(
            'kebisingan.kebisingan_pdf',
            [
                'data' => $data,
                'jabatan' => $jabatan,
                'nama' => $nama
            ]
        )->setPaper('a4', 'landscape');
        $content = $pdf->download()->getOriginalContent();
        Storage::put('public/csv/kebisingan/kebisingan.pdf', $content);
        $response = [
            'message' => 'sudah kebisingan hari ini',
            'status' => 1,
            'data' => url('/') . '/storage/csv/kebisingan/kebisingan.pdf'
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
