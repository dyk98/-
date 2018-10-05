<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCookie extends Controller
{
    //
    public function RegisterCookie (Request $request) {
        $value = response('Hello Cookie')->cookie('mzl','mzlsb','3600');
        $values = $request->cookie('mzl');
        $this->print_encode($values);
    }
}
