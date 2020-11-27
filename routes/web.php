<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


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

Route::get('home', [NoteController::class,'index']);
Route::get('/mostrar', [NoteController::class,'mostrar']);
Route::get('/recibir' ,[NoteController::class, 'recibir']);
Route::get('/actualizar/{id}' ,[NoteController::class, 'actualizar']);
Route::put('/modificar/{id}' ,[NoteController::class, 'modificar']);
Route::delete('/borrar/{id}' ,[AlumnoController::class, 'borrar']);