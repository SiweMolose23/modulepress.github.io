<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Module;
use Illuminate\Support\Facades\DB;

class CatergoryController extends Controller
{
    public static function index(){
        $category = DB::table('catergory')->get();    
    
        return $category;
    }
}
