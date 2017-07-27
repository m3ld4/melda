<?php

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

Route::get('/melmel', function () {
    return view('project');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testmodel',function(){
	$a=App\post::all();
 	return $a;
 });
Route::get('/testmodel1',function(){
	$b=App\post::find(1);
 	return $b;
 });
Route::get('/testmodel2',function(){
	$c=App\post::where('title','like','%cepat, nikah%')->get();
 	return $c;
 });

Route::get('/testmodel3',function(){
	$d=App\post::find(1);
	$d->title = "ciri keluarga sakinah";
	$d->save();
 	return $d;
 });

Route::get('/test',function(){
	$aa=App\siswa::all();
 	return $aa;
 });

Route::get('/test1',function(){
	$bb=App\siswa::find(1);
 	return $bb;
 });
Route::get('/test2',function(){
	$cc=App\siswa::where('nama','like','%cili')->get();
 	return $cc;
 });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
