<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Module;
use App\Models\Category;

class AdminController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->user_role == 0)
        {
        return view('admin');
        }
        else{
            return(abort(404));
        }
    }
/**
 * Display all the users on the system
 */
    public function userindex(){
        $users = DB::table('users')->get();
        return view('users',['users'=>$users,'layout' => 'index']);
    }
/**
 * Create new user 
 * @param  \Illuminate\Http\Request  $request
 */
    public function createUser(Request $request){

        $rolename = $request->input('role');
        if($rolename === "Admin"){
            $roleid = 0;
        } elseif($rolename === "Lecturer"){
            $roleid = 1;
        } elseif($rolename === "Student"){
            $roleid = 2;
        }
        else{
            abort(404);
        }

        $currentId = DB::table('users')->insertGetId([
            'name'=> $request->input('name'),
            'email' => $request->input('email'),
            'role_id' => $roleid,
            "created_at"=> now(),
            "updated_at"=> now(),
            //$module->save() ; 
        ]);
        error_log("User Added!");
        return redirect('http://127.0.0.1:8000/users');
    }
/**
 * Display all the categories
 */
    // public function catergoryindex(){
    //     $categories = DB::table('catergory')->get();
    //     return view('categorymodule',['categories'=>$categories,'layout' => 'index']);
    // }
    /**
     * Display all the comments
     */
    public function commentindex(){
        $comments = DB::table('suggestion')->get();
        return view('commentlist',['comments'=>$comments,'layout' => 'index']);
    }
      /**
     * Remove the specified category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "Delete";
        $category = DB::table('catergory')->where('id','=',$id)->delete();
        return redirect('http://127.0.0.1:8000/admincat');
    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroycomment($id)
    {
        echo "Delete";
        $module = DB::table('suggestion')->where('id','=',$id)->delete();
        return redirect('http://127.0.0.1:8000/comments');
    }

     /**
     * GET: Update the specified resource (category) in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $modules = DB::table('catergory')->where('id','=',$id)->get();
       error_log('Category Updated');
       return view('updatecat',['modules'=>$modules,'layout'=>'index']);
    }

    /**
     *  POST: Update the specified resource (category) in storage.
     * @param  \Illuminate\Http\Request  $request
     */
    public function updateAction(Request $request)
    {
        $id = $request->input('id');
        if($id == ""){
            error_log("There is no content in this request");
            return abort(404);
           
        }
        error_log($id);
        $data = $request->input('content');
        if(empty($data)){
            return abort(404);
            error_log("There is no content in this request");
        }
        error_log("There is content in this request");
        DB::table('catergory')->where('id','=', $id)
        ->update(['name' => $data]);  
        //$modules->pagehtml = $request->input('content');
        error_log('Category Updated');
        return redirect('http://127.0.0.1:8000/admincat');
    }

}

