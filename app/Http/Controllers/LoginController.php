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
        $re_phone = $request->input('phone');
        $re_password = $request->input('password');
        if (DB::table('users')->where('username',$re_username)->exists()) {
            $this->print_encode('已经注册了');
            die;
        }
        DB::table('users')->insert(
            ['username' => $re_username , 'password' => $re_password , 'phone' => $re_phone]
        );
        $user_id = DB::table('users')->where('username',$re_username)->first()->id;
        Cookie::queue('');
    }
    //
}
