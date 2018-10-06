<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Cookie;

use App\User;

class LoginController extends Controller
{
    function print_encode($qqq) {
        echo json_encode($qqq);
    }

    public function register(Request $request)
    {
        $re_username = $request->input('username');
        $re_name = $request->input('name');
        $re_password = $request->input('password');
        $re_time = $request->input('time');
        if (DB::table('users')->where('username',$re_username)->exists()) {
            $this->print_encode('已经注册了');
            die;
        }
        $md5_token = md5($re_password . $re_time . "mzlsb");
        DB::table('users')->insert(
            ['username' => $re_username , 'password' => $re_password , 'name' => $re_name , 'user_token' => $md5_token]
        );
        $this->print_encode('注册成功');
    }
    public function login (Request $request) {
        $re_username = $request->input('username');
        $re_password = $request->input('password');
        $re_time = $request->input('time');
        if (DB::table('users')->where('username',$re_username)->where('password',$re_password)->exists()) {
            $md5_token = md5($re_password . $re_time . "mzlsb");
            DB::table('users')->where('username',$re_username)->where('password',$re_password)->update(['user_token' => $md5_token]);
            $this->print_encode('登陆成功');
        } else {
            $this->print_encode('没有注册或账号密码错误');
        }
    }
    //
}
