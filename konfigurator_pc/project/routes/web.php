<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentsController;

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


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');


Route::get('/user/edit_password', 'App\Http\Controllers\UserController@editPassword')->middleware(['auth'])->name("editPassword");
Route::get('/user/edit_email', 'App\Http\Controllers\UserController@editEmail')->middleware(['auth'])->name("editEmail");
Route::patch('/user/{type}','App\Http\Controllers\UserController@update')->middleware(['auth'])->name("update");


Route::resource('/user', App\Http\Controllers\UserController::class)->only([
    'show', 'edit', 'destroy'
])->middleware(['auth']);

Route::get('/config/{config}/verify', 'App\Http\Controllers\ConfigController@verify')->middleware(['auth'])->name("configVerify");
Route::resource('/config', App\Http\Controllers\ConfigController::class)->middleware(['auth']);

Route::get('config/{config}/benchmark', 'App\Http\Controllers\ConfigBenchmarkController@index')->middleware(['auth'])->name('benchmarkIndex');
Route::get('config/{config}/benchmark/create', 'App\Http\Controllers\ConfigBenchmarkController@create')->middleware(['auth'])->name('benchmarkCreate');
Route::get('config/{config}/benchmark/edit', 'App\Http\Controllers\ConfigBenchmarkController@edit')->middleware(['auth'])->name("benchmarkEdit");
Route::post('config/{config}/benchmark', 'App\Http\Controllers\ConfigBenchmarkController@store')->middleware(['auth'])->name("benchmarkStore");
Route::put('config/{config}/benchmark', 'App\Http\Controllers\ConfigBenchmarkController@update')->middleware(['auth'])->name("benchmarkUpdate");
Route::delete('config/{config}/benchmark', 'App\Http\Controllers\ConfigBenchmarkController@destroy')->middleware(['auth'])->name("benchmarkDestroy");

Route::get('/config', 'App\Http\Controllers\ConfigController@index')->withoutMiddleware(['auth']);

// Route::get('/select', [App\Http\Controllers\Test::class, 'select']);

Route::get('/components/', [ComponentsController::class, 'index'])->name("componentsIndex");
Route::get('/components/{comp}/{type}', [ComponentsController::class, 'list'])->name("componentList");
Route::get('/components/{comp}/{type}/{id}', [ComponentsController::class, 'details'])->name("componentDetails");

Route::post('/components/{comp}/{type}/{id}', [ComponentsController::class, 'pick'])->name("componentDetails");

require __DIR__.'/auth.php';
