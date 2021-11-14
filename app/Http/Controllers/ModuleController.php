<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Catergory;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
      /**
     * Display all the modules registered on the system
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $searchTerm = $_GET['query'];
        // if(empty($searchTerm)){
        $modules = Module::all(); 
       if(empty(auth()->user()->id)){
        
           return view('modules',['modules'=>$modules,'layout'=>'index']);
       }
      
        return view('modules',['modules'=>$modules,'layout'=>'index','userID'=>auth()->user()->id]);
    }

    public function filteredIndex($id){
       
        $categories = DB::table('catergory')->where('id','=',$id)->first();
      // $category = Catergory::find($id);
       
        $modules = DB::table('modules')->where('catergory','=',$categories->name)->get();
        error_log("filter index");
        if(empty(auth()->user()->id)){
        return view('categorymodule',['modules'=>$modules,'layout'=>'index','categories'=>$categories]);
        }
        return view('categorymodule',['modules'=>$modules,'layout'=>'index','categories'=>$categories,'userID'=>auth()->user()->id]);
        
    }

    public function searchIndex()
    {   
        
        $modules = Module::all(); 
     
        return view('modules',['modules'=>$modules,'layout'=>'index']);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all() ; 
        return view('modules',['modules'=>$modules,'layout'=>'create']);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Module::find($id);
        $modules = Module::all();
        return view('module',['modules'=>$modules,'module'=>$module,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $module = Module::find($id);
       $module->module_name = $request->input('name') ;
       $module->module_code = $request->input('moduleCode') ;
       $module->module_description = $request->input('description') ;
       $module->save() ;
       return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = Module::find($id);
        $module->delete();
        return redirect('/');
    }
    /**
     * Search for a module
     */
    public function search(){
        $searchtext = $_GET['query'];
      
        $modules = Module::where('module_name','LIKE','%'.$searchtext.'%')
        ->orwhere('module_code','LIKE','%'.$searchtext.'%')->get();
        if(empty(auth()->user()->id)){
            return view('modules',['modules'=>$modules,'layout'=>'index']);
        }
        return view('modules',['modules'=>$modules,'layout'=>'index','userID'=>auth()->user()->id]);
    }
    /**
     * Search for a module (Authenticated)
     * @param  int  $id User ID
     */
    public function searchPrev($id){
        $searchtext = $_GET['query'];
        $modules = Module::where('module_name','LIKE','%'.$searchtext.'%')
        ->orwhere('module_code','LIKE','%'.$searchtext.'%')->get();
        if(empty(auth()->user()->id)){
            return view('search',['modules'=>$modules,'layout'=>'index']);
        }
        return view('search',['modules'=>$modules,'layout'=>'index','userID'=>auth()->user()->id]);
    }
    /**
     * Preview a module as a Guest
     * @param  int  $id ID of the module
     */
    public function previewGuest($id){
        error_log("Preview");
        $data = " ";
        $modules = DB::table('modules')->where('module_id','=',$id)->get();
        error_log("returning preview");  
       return view('previewGuest',['modules'=>$modules]);
    }
    /**
     * Add a like to a module
     * @param Request $request AJAX request which interacts with the database
     */
    public function like(Request $request){
        $id = $request->input('id');
        DB::table('modules')->where('module_id','=',$id)->update([
            'likes' => \DB::raw('IFNULL(likes,0) + 1')
        ]);
        error_log("Liked");
    }
    /**
     * Remove like from a module
     * @param  Request $request AJAX request which interacts with the database
     */
    public function unlike(Request $request){
        $id = $request->input('id');
        DB::table('modules')->where('module_id','=',$id)->update([
            'likes' => DB::raw('likes - 1')
        ]);
        error_log("Unliked");
    }
}
