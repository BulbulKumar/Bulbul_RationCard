<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\RationController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});


    
   //Route::get('/Add',RationController@);
//Route::Post('Add',[RationController::class,'AddData']);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list','RationController@list');
Route::get('/delete/{id}', 'RationController@delete');
Route::get('/detail', 'RationController@detail');
Route::get('edit/{id}','RationController@edit');
Route::get('/Add', 'RationController@Add');
Route::get('/detail/{id}','RationController@edit');
Route::get('Add/{id}','RationController@update');
//Route::get('/dev/{id}','RationController@dev');
Route::POST('Approv','RationController@index');
Route::get('agree','RationController@index');
//Route::get('dev','RationController@index');
Route::get('/devsubmit/{id}','RationController@update');
Route::POST('/agree','RationController@agree');
//Route::post('dev{id}', function () {
  //return view('dev{id}');
 //});
Route::get('ration', function () {
  return view('ration');
});


Route::get('/Applicationform', function () {
return view('Applicationform'); 
});
Route::get('/ADD', function () {
  return view('ADD'); 
  });

Route::post('/application/submit', 'RationController@store');

Route::get('/', 'RationController@index'); //{
//});

Route::get('/layout',function() {
   return view('layout');
});
Route::get('index', function () {
    return view('index');
});
Route::get('apply', function () {
  return view('apply');
});
Route::get('agree', function () {
  return view('agree');
});
Route::get('Approv', function () {
  return view('Approv');
});
Route::post('regist',[UserRegisterAuth::class,'regist']);
Route::view('regist','regist');

Route::put('user',[UserAuth::class,'userlogin']);

Route::get('/download/{id}','RationController@ack');
// Route::view('login','login'); 



