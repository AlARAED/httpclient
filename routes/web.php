<?php

namespace App\Http\Controllers;
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
    return view('welcome');
});

Route::get('/allpost', [ClientController::class, 'getAllPost'])->name('getAllPost');
Route::get('add-post',[ClientController::class,'addPost'])->name('add.post');
Route::post('update-post',[ClientController::class,'updeatePost'])->name('updeate.post');
Route::get('deletepost/{id}',[ClientController::class,'deletePost'])->name('delete.post');



