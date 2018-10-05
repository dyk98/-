<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckUserCookie extends Controller
{
    //
    public function CheckCookie (Request $request) {
        $values = $request->cookie('mzl');
        $this->print_encode($values);
    }
}
