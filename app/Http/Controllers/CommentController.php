<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Module;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public static function comment(Request $request){
        $currentId = DB::table('suggestion')->insertGetId([
            'module_id' => $request->input('id'),
            'comments' => $request->input('comment'),
            'user_id' => auth()->user()->id,
            "created_at"=> now(),
            "updated_at"=> now(),
            
        ]);
        error_log("comment successfully added!");
    }
}
