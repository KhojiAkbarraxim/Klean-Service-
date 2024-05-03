<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class,'index']);

Route::get('home', [PageController::class,'index']);
Route::get('about', [PageController::class,'about']);
Route::get('service', [PageController::class,'services']);
Route::get('projects', [PageController::class,'projects']);
Route::get('latestblog', [PageController::class,'latestblog']);
Route::get('blogdetail', [PageController::class,'singleblog']);
Route::get('contact', [PageController::class,'contact']);

