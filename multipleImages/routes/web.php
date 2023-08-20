<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EchoMultipleImagesController;
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
Route::get('/', [EchoMultipleImagesController::class,'index'])->name('index.Home');
Route::post('/', [EchoMultipleImagesController::class,'store'])->name('store');
Route::post('uploads', [EchoMultipleImagesController::class,'uploads'])->name('uploads');
