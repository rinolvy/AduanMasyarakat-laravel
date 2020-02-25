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
/* Project1 DasarCrud */

// Route :: get('/','PagesController@home');
// Route :: get('/about','PagesController@about');
// Route :: get('/mahasiswa','MahasiswaController@index');
// //student
// Route :: get('/students','StudentsController@index');
// Route :: get('/students/create','StudentsController@create');
// Route :: post('/students','StudentsController@store');
// Route :: get('/students/{student}','StudentsController@show');
// Route :: delete('/students/{student}','StudentsController@destroy');
// Route :: get('/students/{student}/edit','StudentsController@edit');
// Route :: patch('/students/{student}','StudentsController@update');

// Route :: resource('students','StudentsController');

/* Project2  AduanLingkungan*/

Route::get('/', 'LingkunganController@index');
Route::get('/home', 'LaporkanLingkungan@index');
Route::get('/laporkansekarang', 'LaporkanLingkungan@create');
Route::post('/resultreport', 'LaporkanLingkungan@store');
Route::get('/resultreport', 'LaporkanLingkungan@show');
Route::get('/editlaporan','LaporkanLingkungan@edit');

Auth::routes();

Route::get('/home', 'LaporkanLingkungan@index')->name('home');

Auth::routes();
