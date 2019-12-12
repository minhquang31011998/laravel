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

// Route::get('/', function () {
// 	return view('home');
// });
// Route::prefix('task')->group(function () {
// Route::get('/task/complete/3', function {
// 	return redirect('/');
// })->name('todo.task.complete');
// Route::get('/task/reset/3', function {
// 	return redirect('/');
// })->name('todo.task.reset');

// });
Route::get('hello1',function(){
	return view('hello1');
});
Route::get('sub/hello1',function(){
	return view('hello.hello1');
});
Route::get('hello2', function (){
	// $name='Quang';
	// $y=1998;
 //    return view('hello2', [
 //        'name' => $name,
 //        'year' => $y
 //    ]);
    // return view('hello2')->with('name', 'Quang');
    // return view('hello2')->with([
    //     'name' => 'Quang',
    //     'year' => 1998
    // ]);
	$records = [1,2];
	return view('hello2')->with('records',$records);
});
Route::get('sub/hello2',function(){
	return view('hello.hello2');
});
Route::get('layout/home',function(){
	return view('layouts.home');
});
Route::get('layout/detail',function(){
	return view('layouts.detail');
});
Route::get('profile', function (){
	return view('profile', [
		'name' => 'Quang',
		'year' => 1998,
		'school' => 'PTIT',
		'dchi' => 'Ha Noi',
		'gthieu' => '<b>Dang hoc laravel</b>',
		'target' => 'Di lam',
	]);
});
Route::get('list', function (){
	$list = [
		[
			'name' => 'Học View trong Laravel',
			'status' => 0
		],
		[
			'name' => 'Học Route trong Laravel',
			'status' => 1
		],
		
		[
			'name' => 'Làm bài tập View trong Laravel',
			'status' => -1
		],
	];
	return view('list')->with('list',$list);
});