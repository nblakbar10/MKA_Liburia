<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\TempatWisata;
use App\BundlingTiket;
use App\Artikel;
use App\RencanaLiburan;
use App\ReviewWisata;
use Illuminate\Support\Facades\Auth;
use Validator;

class DetailController extends Controller
{
    
    public function get_tempat_wisata()
    {
        $tempatwisata = TempatWisata::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => '200 OK',
            'message' =>'get_tempat_wisata success',
            'data' => $tempatwisata
        ]);
    }
    public function get_review_wisata(){
        $reviewwisata = ReviewWisata::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => '200 OK',
            'message' =>'get_review_wisata success',
            'data' => $reviewwisata
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
    public function get_user_badge(){}
    public function get_follow_user(){}
    public function get_user_riwayat_liburan(){}
}
