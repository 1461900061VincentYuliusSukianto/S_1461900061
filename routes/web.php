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

Route::get('/', [Sore_Pertemuan3Controller::class,'index']);
Route::post('/', [Sore_Pertemuan3Controller::class,'store']);
Route::get('/tambah', [Sore_Pertemuan3Controller::class,'create']);
Route::get('/edit/{id}', [Sore_Pertemuan3Controller::class,'edit']);
Route::post('/edit/{id}', [Sore_Pertemuan3Controller::class,'update']);
Route::get('/delete/{id}', [Sore_Pertemuan3Controller::class, 'destroy']);