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

Route::get('/', function () {
	return view('home');
});
Route::prefix('task')->group(function () {
Route::get('/task/complete/3', function {
	return redirect('/');
})->name('todo.task.complete');
Route::get('/task/reset/3', function {
	return redirect('/');
})->name('todo.task.reset');

});
