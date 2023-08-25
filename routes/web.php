<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArtController;

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

Route::get('/{user}', [PostController::class, 'mypage']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/create/{art}', [PostController::class, 'create']);
Route::delete('/posts/{post}', [PostController::class,'delete']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);



Route::get('/', [ArtController::class, 'index']);
Route::get('/art/create', [ArtController::class, 'create']);
Route::post('/art', [ArtController::class, 'store']);
Route::delete('/art/{art}', [ArtController::class,'delete']);
Route::get('/art/{art}/edit',  [ArtController::class,'edit']);
Route::put('/art/{art}', [ArtController::class, 'update']);
Route::get('/art/{art}', [ArtController::class, 'show']);

