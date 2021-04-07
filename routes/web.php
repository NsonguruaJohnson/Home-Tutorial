<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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
// Route::get('/', 'DemoController@index')->name('list');
// Route::post('/create', 'DemoController@create')->name('create');
Route::post('/create', [DemoController::class, 'create'])->name('create');


Route::get('/', [DemoController::class, 'index'])->name('list');
Route::get('/dashboard', [DemoController::class, 'dashboard'])->name('dashboard');
Route::get('/edit/{id}', [DemoController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [DemoController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [DemoController::class, 'destroy'])->name('destroy');
