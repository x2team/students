<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();



Route::middleware('verified')->group(function() {
    Route::namespace('Admin')->group(function () {
        // Controllers Within The "App\Http\Controllers\Admin" Namespace
        Route::prefix('admin')->group(function () {
            
            // Route::get('/', 'HomeController@index')->name('home');
            Route::get('/home', 'HomeController@index')->name('admin.home');
            

            Route::get('/student/fetchdata','StudentController@fetchdata')->name('admin.student.fetchdata');
            Route::DELETE('/student/destroyMulti', 'StudentController@destroyMulti')->name('admin.student.destroyMulti');
            Route::resource('student', 'StudentController', ['as' => 'admin'])->except('update');
            Route::POST('student/{student}', 'StudentController@update')->name('admin.student.update');
            



            Route::get('locale/{locale}','LangController@changeLocale')->name('admin.locale');

        });
    });
});
