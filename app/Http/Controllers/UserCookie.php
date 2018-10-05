<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;

class UserCookie extends Controller
{
    function print_encode($qqq) {
        echo json_encode($qqq);
    }
    //
    public function RegisterCookie (Request $request) {
        $cookie = cookie('mzl', 'mzlsb', 10);
        return response('Hello Lol')->cookie($cookie);
    }
}
