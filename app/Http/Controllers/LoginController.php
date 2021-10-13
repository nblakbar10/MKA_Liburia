<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('nApp')->accessToken;
            ///return response()->json(['success' => $success], $this->successStatus);
        }
        ///else{
            ///return response()->json(['error'=>'Unauthorised'], 401);
        ///}
        return redirect('/halamanutama');
    }
}
