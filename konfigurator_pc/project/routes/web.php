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
Route::get('/config/{config}/publish', 'App\Http\Controllers\ConfigController@publish')->middleware(['auth'])->name("configPublish");
Route::resource('/config', App\Http\Controllers\ConfigController::class)->middleware(['auth']);

Route::get('config/{config}/benchmark', 'App\Http\Controllers\ConfigBenchmarkController@index')->middleware(['admin'])->name('benchmarkIndex');
Route::get('config/{config}/benchmark/create', 'App\Http\Controllers\ConfigBenchmarkController@create')->middleware(['admin'])->name('benchmarkCreate');
Route::get('config/{config}/benchmark/edit', 'App\Http\Controllers\ConfigBenchmarkController@edit')->middleware(['admin'])->name("benchmarkEdit");
Route::post('config/{config}/benchmark', 'App\Http\Controllers\ConfigBenchmarkController@store')->middleware(['admin'])->name("benchmarkStore");
Route::put('config/{config}/benchmark', 'App\Http\Controllers\ConfigBenchmarkController@update')->middleware(['admin'])->name("benchmarkUpdate");
Route::delete('config/{config}/benchmark', 'App\Http\Controllers\ConfigBenchmarkController@destroy')->middleware(['admin'])->name("benchmarkDestroy");

Route::get('/config', 'App\Http\Controllers\ConfigController@index')->withoutMiddleware(['auth']);

Route::get('/config/{config}/share_url', 'App\Http\Controllers\ConfigController@shareUrl')->middleware(['auth'])->name('configShareUrl');
Route::get('/config/{config}/{md5}','App\Http\Controllers\ConfigController@sharedConfig')->middleware(['auth'])->name('sharedConfig');

// Route::get('/select', [App\Http\Controllers\Test::class, 'select']);

Route::get('/components/', [ComponentsController::class, 'index'])->name("componentsIndex");
Route::get('/components/{comp}/{action}', [ComponentsController::class, 'list'])->name("componentList");
Route::get('/components/{comp}/pick/{id}', [ComponentsController::class, 'pick'])->name("componentPick");
Route::get('/components/{comp}/{action}/{id}', [ComponentsController::class, 'details'])->name("componentDetails");

require __DIR__.'/auth.php';
