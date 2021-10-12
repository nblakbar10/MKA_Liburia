<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('nApp')->accessToken;
        $success['username'] =  $user->username;

        ///return response()->json(['success'=>$success], $this->successStatus);
    
    ///public function store(){
        // ka nabil ini validasi datanya untuk registrasi, aku komen dulu soalnya
        // kalo ga dikomen jadi error karna dimodel blom diatur

        ///$request->validate([
            ///'fullname' => 'required|max:255',
            ///'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            ///'email' => 'required|email|unique:users',
            ///'password' => 'required|min:5|max:255'
         ///]);

        ///dd('registrasi berhasil');
        $request->session()->flash('succes', 'Registrasi berhasil !! silahkan login');
        return redirect('/halamanutama');
    }
}
