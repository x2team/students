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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



// Route::namespace('Admin')->group(function () {
//     // Controllers Within The "App\Http\Controllers\Admin" Namespace
//     Route::prefix('admin')->group(function () {
        
//         Route::get('login', 'LoginController@showLoginForm')->name('login');
//         Route::post('login', 'LoginController@login');
//         Route::get('/home', 'LoginController@index')->name('home');


//     });
// });

// Route::namespace('Admin')->prefix('admin')->group(function () {
//     // Controllers Within The "App\Http\Controllers\Admin" Namespace
//     // Route::prefix('admin')->group(function () {
//         Route::get('users', function () {
//             // Matches The "/admin/users" URL
//         });

//         // Route::resource('/category', 'Login@login');
//     // });
// });
