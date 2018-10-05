<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckUserCookie extends Controller
{
    function print_encode($qqq) {
        echo json_encode($qqq);
    }
    //
    public function CheckCookie (Request $request) {
        $values = $request->cookie('mzl');
        $this->print_encode($values);
    }
}
