<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;
class CheckUserCookie extends Controller
{
    function print_encode($qqq) {
        echo json_encode($qqq);
    }
    //
    public function CheckCookie (Request $request) {
        $values = $request->cookie();
        $this->print_encode($values);
    }
}
