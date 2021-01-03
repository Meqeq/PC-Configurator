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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/pcconfig', App\Http\Controllers\PCConfigController::class)->middleware(['auth']);

Route::get('/pcconfig', 'App\Http\Controllers\PCConfigController@index')->withoutMiddleware(['auth']);

// Route::get('/select', [App\Http\Controllers\Test::class, 'select']);

Route::get('/components/', [ComponentsController::class, 'index'])->name("componentsIndex");
Route::get('/components/{comp}/{type}', [ComponentsController::class, 'list'])->name("componentList");
Route::get('/components/{comp}/{type}/{id}', [ComponentsController::class, 'details'])->name("componentDetails");

require __DIR__.'/auth.php';
