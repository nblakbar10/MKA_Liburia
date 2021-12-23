<?php

namespace App\Http\Controllers\Api;

//use App\Follow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Follower;
use App\Following;


class FollowController extends Controller
{
    public function get_following(){
        Auth::user();
        $following = Follow::orderBy('id')->get();
        return response()->json([
            'status' => '200 OK',
            'message' =>'get_rencana_liburan success',
            'data' => $rencanaliburan
        ]);
    }
    public function get_follower(){
        Auth::user();
        $follower = Follow::orderBy('id')->get();
        return response()->json([
            'status' => '200 OK',
            'message' =>'get_data_follower success',
            'data' => $follower
        ]);
    }

    public function unfollow_user(Request $request){
        $unfol = Following::create([
            'following_id' => $request->input('following_id'),
            'user_id' => auth()->user()->id
            ]);

        $user = User::findOrFail($unfol);
        if($user)
           $user->delete(); 
        else
            return response()->json(error);
        return response()->json([
            'status' => '200 OK',
            'message' =>'delete_user success',
            'data' => $user
        ]);


        // $unfollow_user->user_id;
        // $unfollow_user->save();

        // return response()->json([
        //     'status' => '200 OK',
        //     'message' =>'follow user success',
        //     'data' => $unfollow_user
        // ]);
    }



    public function follow_user(Request $request){
        $follow_user = Following::create([
            'following_id' => $request->input('following_id'),
            'user_id' => auth()->user()->id
            ]);

        $follow_user->user_id;
        $follow_user->save();

        return response()->json([
            'status' => '200 OK',
            'message' =>'follow user success',
            'data' => $follow_user
        ]);
    }
}
