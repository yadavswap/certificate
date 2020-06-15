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
Route::get('/404', function () {
    return view('404');
});
Route::get('/index', function () {
    return view('/index.html');
});
Route::get('pdf-generate','PDFController@PDFgenerate');
Route::post('/student/store','StudentController@store')->name('studentstore');
Route::get('ainet', 'StudentController@index');
Route::get('yadavswap', 'StudentController@showdata');


// Route::get('/yadavswap', function () {
//     return view('data');
// });
Route::get('/generate/{id}','StudentController@generate');
Route::post('generate','MarkController@generate');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
