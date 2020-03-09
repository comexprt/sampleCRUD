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


Route::resource('note','NoteController');

Route::get('/',function(){
	return redirect()->route('note.index');
});

Route::resource('ajax-posts', 'ajaxcrud\AjaxPostController');