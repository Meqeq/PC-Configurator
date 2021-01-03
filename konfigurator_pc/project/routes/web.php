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

Route::resource('/user', App\Http\Controllers\UserController::class)->only([
    'show', 'edit', 'destroy'
])->middleware(['auth']);

Route::resource('/config', App\Http\Controllers\ConfigController::class)->middleware(['auth']);

Route::get('/config', 'App\Http\Controllers\ConfigController@index')->withoutMiddleware(['auth']);

// Route::get('/select', [App\Http\Controllers\Test::class, 'select']);

Route::get('/components/', [ComponentsController::class, 'index'])->name("componentsIndex");
Route::get('/components/{comp}/{type}', [ComponentsController::class, 'list'])->name("componentList");
Route::get('/components/{comp}/{type}/{id}', [ComponentsController::class, 'details'])->name("componentDetails");

require __DIR__.'/auth.php';
