<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PasswordVerificationController;
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
// 捕获所有未匹配的路由
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
Route::get('/', [DocumentController::class, 'index'])->name('documents.index');

Route::get('/verify/{slug}', [PasswordVerificationController::class, 'show'])->name('password.verify');
Route::post('/verify/admin/{slug}', [PasswordVerificationController::class, 'verifyAdminPassword'])->name('admin.verify.post');
Route::post('/verify/document/{slug}', [PasswordVerificationController::class, 'verifyDocumentPassword'])->name('documents.check-password');

Route::get('/documents/{slug}/{version?}', [DocumentController::class, 'show'])->name('documents.show');
Route::get('/documents/{document_slug}/{version}/articles/{article_slug}/{article_id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/documents/{document_slug}/{version_number}/{chapter_id}/find-article/{article_slug}', [ArticleController::class, 'findArticleIdBySlug'])->name('articles.find_by_slug');
Route::get('/documents/{document_slug}/{version_number}/find-article/{article_slug}', [ArticleController::class, 'findArticleIdBySlugNoChapter'])->name('articles.find_by_slug_no_chapter');



