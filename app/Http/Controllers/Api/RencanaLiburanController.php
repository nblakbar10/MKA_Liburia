<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\RencanaLiburan;

class RencanaLiburanController extends Controller
{
    public function get_rencana_liburan($user_id){
        $rencanaliburan = RencanaLiburan::where('user_id',$user_id)->get();
        //RencanaLiburan::where('user_id',$user_id)->get();
        
        return response()->json([
            'status' => '200 OK',
            "message" => "rencana liburan retrieved successfully.",
            "data" => $rencanaliburan
        ]);
    }

    public function edit_rencana_liburan(Request $request, $id){
        $rencanaliburan = RencanaLiburan::find($id);
        $rencanaliburan->update($request->all());
        return response()->json([
            'status' => '200 OK',
            "message" => "edit rencana liburan sukses",
            "data" => $rencanaliburan
        ]); 
    }

    public function post_rencana_liburan(Request $request){
        $rencanaliburan = RencanaLiburan::create([
            'nama_rencana' => $request->input('nama_rencana'),
            'deskripsi_rencana' => $request->input('deskripsi_rencana'),
            'user_id' => auth()->user()->id
            ]);

        $rencanaliburan->user_id;
        $rencanaliburan->save();

        return response()->json([
            'status' => '200 OK',
            'message' =>'post_rencana_liburan success',
            'data' => $rencanaliburan
        ]);
    }

    public function delete_rencana_liburan($id) {
        $rencanaliburan = RencanaLiburan::findOrFail($id);
        if($rencanaliburan)
           $rencanaliburan->delete(); 
        else
            return response()->json(error);
        return response()->json([
            'status' => '200 OK',
            'message' =>'delete_rencana_liburan success',
            'data' => $rencanaliburan
        ]);
    }
}




