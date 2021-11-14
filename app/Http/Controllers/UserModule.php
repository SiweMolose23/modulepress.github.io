<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Module;



class UserModule extends Controller
{ 
    private $updatedModule;
    /**
     * Creates a new instance of this controller for each logged in user
     */
    public function __construct()
    {    
        $this->middleware('auth');
    }

    /**
     * Display all the modules that belong to a student
     */
    public function index(){
       
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $modules = DB::table('modules')->where('user_id','=',$user_id)->get();
        $currentId = 1;
        foreach ($modules as $module) {
            error_log($module->module_name);
        }
        //Sanity check: Checking if the id is correct by printing in terminal
        return view('mymodules',['modules'=>$modules,'layout'=>'index']);
    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {

        $pagehtml =$request->input('content');
        if(empty($pagehtml)){
            abort(404,'No page content was found');
        }
        else{
            error_log("There is content");
        }
        $currentId = DB::table('modules')->insertGetId([
            'module_name'=> $request->input('title'),
            'module_code' => $request->input('code'),
            'pagehtml' => $request->input('content'),
            'user_id' => auth()->user()->id,
            "created_at"=> now(),
            "updated_at"=> now(),
            'catergory'=> $request->input('catergory'),
            'likes'=>0
            //$module->save() ; 
        ]);
       error_log("Module Added!");
       //return view('build',['catergories'=>$catergory,'layout'=>'show']);
        return redirect('http://127.0.0.1:8000/mymodules')->with('message','Module Successfully Added');
    }

    public function openTemplate($id){
        $modules = DB::table('template')->where('id','=',$id)->get();

        return view('templateCreate',['modules'=>$modules,'layout'=>'index']);
    }

    public function addTemplate(){

    }
    /**
    *Add the webpage associated with the newly created module into the database
    * request
    * $id The id of the module being edited
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response 
    * 
    */
    public function addhtml(Request $request, $id){
        error_log('added');
        $pagehtml = $request->input('data');
        if($request->has('_token')){
            error_log("Not Empty");
        }
        else{
            error_log("Empty");
        }
        DB::update('update modules set pagehtml = ? where id = ?', [$pagehtml,$id]);
        echo "Successfully Added New Modules!!!.";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
    */

    public function store(Request $request)
    {
        // $module = new Module();
        // $module->name = $request->input('name') ;
        // $module->moduleCode = $request->input('moduleCode') ;
        // $module->description = $request->input('description') ;
        // $module->save() ;
        $module = Module::create([
     
                'name'=> $request->input('name'),
                'moduleCode' => $request->input('moduleCode'),
                'description' => $request->input('description'),
                'user_id' => auth()->user()->id
                //$module->save() ; 
   
        ]);
        return redirect('/modules');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module = Module::find($id);
        $modules = Module::all();
        return view('module',['modules'=>$modules,'module'=>$module,'layout'=>'show']);
    }

 
    /**
     * GET: Update the specified resource (module) in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modules = DB::table('modules')->where('module_id','=',$id)->get();
    //    //$modules = Module::find(all);
    //        $data = $request->input('content');
    //    if($data->isEmpty()){
    //        return abort(404);
    //    }
  
    //    //Module::where)->update(['customer_id' => 1, 'answer' => 2]);
    //    DB::table('modules')->where('module_id','=', $id)
    //    ->update(['pagehtml' => $data]);  
    //    //$modules->pagehtml = $request->input('content');
       error_log('Module Updated');
       return view('update',['modules'=>$modules,'layout'=>'index']);
    }
    /**
     *  POST: Update the specified resource (module) in storage.
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
        DB::table('modules')->where('module_id','=', $id)
        ->update(['pagehtml' => $data]);  
        //$modules->pagehtml = $request->input('content');
        error_log('Module Updated');
        return redirect('http://127.0.0.1:8000/mymodules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "Delete";
        // $module = Module::find($id);
        $module = DB::table('modules')->where('module_id','=',$id)->delete();
        //$module->delete();
        return redirect('http://127.0.0.1:8000/mymodules');
    }
/**
 * Preview the modules you have create
 * @param  int  $id ID of the module
 */
    public function preview($id){
        error_log("Preview");
        $data = " ";
        $modules = DB::table('modules')->where('module_id','=',$id)->get();
        error_log("returning preview");
      if(auth()->user()->user_role ==1 || auth()->user()->user_role ==0){
       return view('preview',['modules'=>$modules,'userID'=>auth()->user()->id]);
      }
      else if(auth()->user()->user_role ==2){
        return view('previewStudent',['modules'=>$modules,'userID'=>auth()->user()->id]);
      }
    }

    public function template(){
        
    }
    public function createTemplate($id, Request $request){


    }
}
