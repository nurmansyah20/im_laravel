<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\KritikController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/welcome', [AuthController::class, 'welcome']);
Route::get('/data-tables', [IndexController::class, 'tables']);

// CRUD

// CREATE data
// route untung mengarah ke form casts
Route::get('/cast/create', [CastController::class, 'create']);
//simpan data cast di database
Route::post('/cast', [CastController::class, 'store']);

// READ data
// tampil semua data di table
Route::get('/cast', [CastController::class, 'index']);
// detail cast berdasarkan id
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

// UPDATE data
// route untuk mengarah ke form edit cast berdasarkan id
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
// update data berdasarkan id
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

// DELETE data
Route::delete('cast/{cast_id}', [CastController::class, 'destroy']);

Route::middleware(['auth'])->group(function(){
    
    // CRUD Genre
    Route::resource('genre', GenreController::class);

    Route::post('/kritik/{film_id}', [KritikController::class, 'store']);

});


// CRUD Film
Route::resource('film', FilmController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
