<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCookie extends Controller
{
    function print_encode($qqq) {
        echo json_encode($qqq);
    }
    //
    public function RegisterCookie (Request $request) {
        return response('Hello Lol')->cookie(
            'mzl', 'mzlsb', 3600
        );
    }
}
