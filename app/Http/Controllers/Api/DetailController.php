<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\User;
use App\TempatWisata;
use App\BundlingTiket;
use App\Artikel;
use Illuminate\Support\Facades\Auth;
use Validator;

class DetailController extends Controller
{
    public function get_tempat_wisata(Request $request)
    {
        $tempatwisata = TempatWisata::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => '200 OK',
            'message' =>'get_tempat_wisata success',
            'data' => $tempatwisata
        ]);
    }

    public function get_bundling_tiket(){
        $bundlingtiket = BundlingTiket::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => '200 OK',
            'message' =>'get_bundling_tiket success',
            'data' => $bundlingtiket
        ]);
    }

    public function get_review_wisata(){
        $tempatwisata = TempatWisata::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => '200 OK',
            'message' =>'get_tempat_wisata success',
            'data' => $tempatwisata
        ]);
    }

    public function get_artikel(){
        $artikel = Artikel::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => '200 OK',
            'message' =>'get_artikel success',
            'data' => $artikel
        ]);
    }


    public function getdanpost_rencana_liburan(){}
    public function get_user_badge(){}
    public function get_follow_user(){}
    public function get_user_riwayat_liburan(){}
}
