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
    return view('welcome');
});





Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index');
   Route::resource('department', 'DepartmentController')->middleware('auth');;
   Route::resource('faculty', 'FacultyController')->middleware('auth');;
   Route::resource('notice','NoticeController')->middleware('auth');;
});


// Route::get('/admin',function(){
//     return view('admin.pages.dashboard');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
