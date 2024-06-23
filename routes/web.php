<?php

use App\Http\Controllers\DocumentController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [DocumentController::class, 'index'])->name('documents.index');
Route::get('/documents/{slug}/{version?}', [DocumentController::class, 'show'])->name('documents.show');
Route::post('/documents/{slug}/check-password', [DocumentController::class, 'checkPassword'])->name('documents.check-password');
