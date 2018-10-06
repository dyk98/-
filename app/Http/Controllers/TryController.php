<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TryController extends Controller
{
    //
    public function tryinput (Request $request) {
        $name = $request->input('name');
        $password = $request->input('password');
        $all = [$name,$password];
        echo json_encode($all);
    }
}
