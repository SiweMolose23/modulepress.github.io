<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

 Route::get('/modules', function () {
     return view('modules');
});

Route::get('/build', function () {
    return view('build');
});

Route::get('/about', function () {
    return view('about');
});




Route::get('/addmodule', function () {
    return view('addmodule');
});
// Route::get('/preview/search', function () {
//     return view('search',['layout'=>'index']);
// });

// Route::get('/mymodules', function () {
//     return view('mymodules');
// });

Route::get('/modules',"ModuleController@index");
Route::get('/modules/edit/{id}',"ModuleController@edit");
Route::get('/modules/show/{id}',"ModuleController@show");
Route::post('/modules/create',"ModuleController@create");
Route::get('/modules/store',"ModuleController@store");
Route::get('/modules/update/{id}',"ModuleController@update");
Route::get('previewGuest/{id}',"ModuleController@previewGuest");
Route::get('index/{id}',"ModuleController@filteredIndex");

Route::get('search',"ModuleController@search");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('mymodules',"UserModule@index");
Route::post('add',"UserModule@add");
Route::get('/mymodules/edit/{id}',"UserModule@edit");
Route::get('/mymodules/show/{id}',"UserModule@show");
Route::post('/mymodules/create',"UserModule@create");
Route::get('/mymodules/store',"UserModule@store");
Route::get('/mymodules/update/{id}',"UserModule@update");
Route::get('/mymodules/build',"UserModule@addhtml");
Route::post('/mymodules/build',"UserModule@addhtml");
//Route::get('/mymodules/destroy/{id}',"UserModule@destroy");
Route::get('preview/{id}',"UserModule@preview");
Route::get('previewStudent/{id}',"UserModule@preview");
//Route::get('/preview/{id}/search/,ModuleController@searchPrev');
Route::get('update/{id}',"UserModule@update");
//Route::get('update',"UserModule@update");
Route::get('destroy/{id}',"UserModule@destroy");
Route::post('updateAction',"UserModule@updateAction");

Route::post('like',"ModuleController@like");
Route::post('unlike',"ModuleController@unlike");
Route::post('comment',"CommentController@comment");
Route::get('moduleform',"CatergoryController@index");


Route::get('template/{id}',"UserModule@opentemplate");
Route::post('buildtemplate',"UserModule@createTemple");
Route::get('destroycomment/{id}',"AdminController@destroycomment");
Route::get('users',"AdminController@userindex");
Route::get('comments',"AdminController@commentindex");

