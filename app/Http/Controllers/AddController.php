<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    //
    public function addcircle (Request $request) {
        $user_token = $request->input('token');
        $circle_id = $request->input('circle_id');
        $user_id = DB::table('users')->where('user_token',$user_token)->value('id');
        for ($i=0;$i<count($circle_id);$i++) {
            DB::table('likecircle')->insert([
                'user_id' => $user_id , 'circle_id' => $circle_id[$i]
            ]);
        }
        echo json_encode('添加成功');
    }
    public function addteam (Request $request) {
        $user_token = $request->input('token');
        $team_id = $request->input('team_id');
        $user_id = DB::table('users')->where('user_token',$user_token)->value('id');
        for ($i=0;$i<count($team_id);$i++) {
            DB::table('liketeam')->insert([
                'user_id' => $user_id , 'team_id' => $team_id[$i]
            ]);
        }
        echo json_encode('添加成功');
    }
}
