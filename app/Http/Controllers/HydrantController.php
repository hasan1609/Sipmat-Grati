<?php

namespace App\Http\Controllers;

use App\Models\Hydrant;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class HydrantController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => ['required'],
            'no_box' => ['required'],
            'lokasi' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $data = $request->all();
            $post = Hydrant::create($data);
            $response = [
                'message' => 'Post apar berhasil',
                'sukses' => 1,
                'data' => null
            ];

            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            $response = [
                'message' => 'Post apar gagal',
                'status' => 0,
                'data' => $e->errorInfo
            ];

            return response()->json($response, Response::HTTP_OK);
        }
    }

    public function updatehydrant(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'kode' => ['required'],
            'no_box' => ['required'],
            'lokasi' => ['required'],
            'id' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $data = $request->all();

        $edit = DB::table('hydrants')->where('id', $request->id)->update($data);
        $response = [
            'message' => 'Post apar berhasil',
            'sukses' => 1,
            'data' => null
        ];

        return response()->json($response, Response::HTTP_CREATED);
    }
    public function gethydrant()
    {
        $data = Hydrant::all();
        $response = [
            'message' => 'Post apar berhasil',
            'data' => $data
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    public function deletehydrant(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        DB::table('hydrants')->where('id', $request->id)->delete();
        $response = [
            'message' => 'celete apar berhasil',
            'sukses' => 1
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
