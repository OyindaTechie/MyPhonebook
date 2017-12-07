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
   //return view('welcome');
	return view('start');
});

/*Route::get('/', function () {
     return view('auth.register');
});*/
Route::get('/start', function () {
    return view('start');
});
Route::post('/register', 'Homepage@Register');

Route::post('/Login', 'Homepage@Login');


Route::get('/Logout', 'Homepage@Logout');

Route::get('/addup', 'Homepage@Addup') ;

Route::post('/addupnumbers', 'PerformingCrud@Addupnumbers');

Route::get('/edit', 'PerformingCrud@Edit');

Route::get('/edit/{id}', 'PerformingCrud@Edit');


Route::get('/delete/{id}', 'PerformingCrud@Delete');

Route::post('/update/{id}', 'PerformingCrud@Update');
//Route::post('/addupnumbers', 'Homepage@Addupnumbers');


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/viewallcontact', 'PerformingCrud@Viewallcontact');