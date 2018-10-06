<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class RemoveController extends Controller
{
    //
    public function removecircle (Request $request) {
        $user_token = $request->input('token');
        $circle_id = $request->input('circle_id');
        $user_id = DB::table('users')->where('user_token',$user_token)->value('id');
        for ($i=0;$i<count($circle_id);$i++) {
            DB::table('likecircle')->where('user_id',$user_id)->where('circle_id',$circle_id[$i])->delete();
        }
        echo json_encode('删除成功');
    }
    public function removeteam (Request $request) {
        $user_token = $request->input('token');
        $team_id = $request->input('team_id');
        $user_id = DB::table('users')->where('user_token',$user_token)->value('id');
        for ($i=0;$i<count($team_id);$i++) {
            DB::table('liketeam')->where('user_id',$user_id)->where('team_id',$team_id[$i])->delete();
        }
        echo json_encode('删除成功');
    }
}
