<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExitController extends Controller
{
    //
    public function exitlogin (Request $request) {
        $user_token = $request->input('token');
        DB::table('users')->where('user_token',$user_token)->update(['user_token' => '']);
        echo json_encode('退出成功');
    }
}
