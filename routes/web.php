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
    //return view('overview');
    return redirect('overview');
});

Route::get('/overview', function () {
    return view('overview');
});

Route::get('/genset', function () {
    return view('genset');
});

Route::get('/tangki', function () {
    return view('tangki');
});

Route::get('/motor', function () {
    return view('motor');
});

Route::get('/baterai', function () {
    return view('baterai');
});

// Route for testing
Route::get('/charts', function () {
    return view('charts');
});

// Route for testing
Route::get('/gasfill', function () {
    return view('gasoline-filling');
});

Route::get('/blank', function () {
    return view('blank');
});
// End

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'  => 'admin', 'middleware'=>'auth'], function(){
    Route::get('dashboard', [AdminController::class, 'index']) -> name ('admin.dashboard');
    Route::get('profile', [AdminController::class, 'index']) -> name ('admin.profile');
    Route::get('settings', [AdminController::class, 'index']) -> name ('admin.settings');
});

Route::group(['prefix'  => 'user', 'middleware'=>'auth'], function(){
    Route::get('dashboard', [UserController::class, 'index']) -> name ('user.dashboard');
    Route::get('profile', [UserController::class, 'index']) -> name ('user.profile');
    Route::get('settings', [UserController::class, 'index']) -> name ('user.settings');
});