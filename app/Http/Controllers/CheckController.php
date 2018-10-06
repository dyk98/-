<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    //
    public function checkcookie (Request $request) {
        $name = $request->input('name');
        $password = $request->input('password');
        $all = [$name,$password];
        echo json_encode($all);
    }
}
