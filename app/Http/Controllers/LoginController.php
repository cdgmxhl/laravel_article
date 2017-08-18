<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){
        if($request->isMethod('post')){
            $data = User::create([
                'name'     => $request->get('name'),
                'email'    => $request->get('email'),
                'password' => crypt($request->get('password'),'hahaha')
            ]);
            if(!empty($data)) return redirect('login');  //注册成功
            echo '未知错误,注册失败';
        }
        return view('login/register');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            if (Auth::attempt(['email'=>$request->get('email'), 'password'=>$request->get('password')])) {
                return redirect('article');
            }else{
                echo '登录失败';
            }
        }
        return view('login/login');
    }

     public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
