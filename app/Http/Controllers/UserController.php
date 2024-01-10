<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function signup(){
        return view('signup');
    }

    public function insert(Request $req){
        $data=DB::table('users')->insert([
                'name'         =>$req->input('fullName'),
                'email'        =>$req->input('email'),
                'grender'      =>$req->input('gender'),
                'password'      =>password_hash($req->input('password'),PASSWORD_DEFAULT)
        ]);
        if ($data) {
            return redirect('/signin')->with('success', true);
        } else {
            return redirect('/signup')->with('unsuccess', true);
        }
}
    public function signin()
    {
        return view('signin');
    }
    public function login(Request $req){
        $email=$req->input('email');
        $pass=$req->input('password');
        $user=DB::table('users')->where('email',$email)->first();
        if(!$user){
            return redirect('/signin')->with('notuser', true);
        }
        if(password_verify($pass,$user->password))
        {
            session()->put('USER',$user->name);
            session()->put('USER_ID', $user->id);
            session()->put('IP', $_SERVER['REMOTE_ADDR']);
            return redirect('/dashbord')->with('login', true);
        }
        else{
            return redirect('/signin')->with('wrong', true);
        }
    }
    public function logout(Request $req){
        $req->session()->forget('USER');
        $req->session()->flush();
        return redirect('/signin')->with(['message'=>'logout']);
    }
}
