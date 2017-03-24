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
// Route::get('/students', 'StudentController@showstudentform' );

Auth::routes();
// Route::get('/home', 'HomeController@index');
Route::get('/home', 'MainController@index');
Route::get('/del/{id}','HomeController@toDelete');


// Route::get('home', 'FileEntryController@index');
// Route::get('fileentry/get/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get']);
// Route::post('fileentry/add',['as' => 'addentry', 'uses' => 'FileEntryController@add']);

// Route::get('/home', 'ProductController@index');
// Route::get('fileentry/get/{filename}', ['as' => 'getentry', 'uses' => 'ProductController@addFile']);

Route::get('/new', 'ProductController@newProduct');
Route::get('/products', 'ProductController@index');
Route::get('/destroy/{id}', 'ProductController@destroy');
Route::post('/save', 'ProductController@addFile');


 