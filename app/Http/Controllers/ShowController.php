<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

class ShowController extends Controller
{
    function print_encode($qqq) {
        echo json_encode($qqq);
    }

    public function register(Request $request)
    {
        $users = DB::table('users')->first();

        $this->print_encode($users->id);
    }
    //
}
