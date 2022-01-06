<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\TempatWisata;
use App\ReviewTempatWisata;

class ReviewTempatWisataController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    
    public function post_review_wisata(Request $request, $tempatwisata)
    {
        $review = ReviewTempatWisata::create([
            'review' => $request->review,
            'rating' => $request->rating,
            'user_id' => auth()->user()->id
            ]);

        // $review->user_id;
        $review->save();

        return response()->json([
            'status' => '200 OK',
            'message' =>'post_rencana_liburan success',
            'data' => $review
        ]);
    }


    public function get_review_wisata($user_id){
        $review = ReviewTempatWisata::where('user_id',$user_id)->get();
        //RencanaLiburan::where('user_id',$user_id)->get();
        
        return response()->json([
            'status' => '200 OK',
            "message" => "review wisata from this user retrieved successfully.",
            "data" => $review
        ]);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, TempatWisata $tempatwisata, ReviewTempatWisata $review)
    {
        if (auth()->user()->id !== $review->user_id) {
            return response()->json(['message' => 'Action Forbidden!']);
        }
        $request->validate([
            'review' => 'required|string',
            'rating' => 'required|numeric|min:0|max:5',
        ]);

        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();

        return response()->json(['message' => 'Review Updated!', 'review' => $review]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */

    public function destroy(TempatWisata $tempatwisata, ReviewTempatWisata $review)
    {
        if (auth()->user()->id !== $review->user_id) {
            return response()->json(['message' => 'Action Forbidden!']);
        }
        $review->delete();
        return response()->json(null, 204);
    }









































    
    // public function post_review_wisata(Request $request){
    //     $rencanaliburan = RencanaLiburan::create([
    //         ''
    //         'nama_rencana' => $request->input('nama_rencana'),
    //         'deskripsi_rencana' => $request->input('deskripsi_rencana'),
    //         'user_id' => auth()->user()->id
    //         ]);

    //     $rencanaliburan->user_id;
    //     $rencanaliburan->save();

    //     return response()->json([
    //         'status' => '200 OK',
    //         'message' =>'post_rencana_liburan success',
    //         'data' => $rencanaliburan
    //     ]);
    // }

    // public function get_review_wisata($user_id){
    //     $rencanaliburan = ReviewTempatWisata::where('user_id',$user_id)->get();
    //     //RencanaLiburan::where('user_id',$user_id)->get();
        
    //     return response()->json([
    //         'status' => '200 OK',
    //         "message" => "rencana liburan retrieved successfully.",
    //         "data" => $rencanaliburan
    //     ]);
    // }


}
