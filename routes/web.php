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

Route::get('/exam',function () {
    return view('pages.exam');
});


Route::get('/carrer', function() {
    return view('pages.carrer');
});

Route::get('/scholarship', function() {
    return view('pages.scholarship');
});

Route::get('/events', function() {
    return view('pages.events');
});

Route::get('/gallery', function() {
    return view('pages.gallery');
});

Route::get('/contact', function() {
    return view('pages.contact');
});



Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index');
   Route::resource('department', 'DepartmentController');
   Route::resource('faculty', 'FacultyController')->middleware('auth');;
   Route::resource('notice','NoticeController')->middleware('auth');;
   
  // Route::resource('gallery', 'GalleryController')->middleware('auth');
   
});


// Route::get('/admin',function(){
//     return view('admin.pages.dashboard');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
