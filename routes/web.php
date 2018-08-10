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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/{foo}', function ($foo){
	return $foo;
});

Route::pattern('foo', '[0-9a-zA-Z]{3}');
Route::get('/{foo?}', function ($foo='bar'){
	return $foo;
})->where('foo','[0-9a-zA-Z]{3}');
*/

/* #리다이렉트
Route::get('/',[
	'as' => 'home',
	function () {
		return 'home page';
	}
]);

Route::get('/home', function() {
	return redirection(route('home'));
});
*/


/*

Route::get('/', function () {
    return view('errors.404');
});
*/

/* #데이터 바인딩

Route::get('/', function () {
    return view('welcome')->with('name','Danhee');
});
*/

/*# 여러개 데이터 바인딩
Route::get('/', function () {
	return view('welcome')->with([
		'name' => 'danhee',
		'greeting' => 'hello?',
	]);
});

*/

#view() 함수 이용한 바인딩
Route::get('/', function() {
	return view('welcome',[
		'name' => 'danhee1',
		'greeting' => '안녕하세요',
	]);
});