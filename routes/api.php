<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::prefix('post')->group(function () {
    Route::get('/{id}', [PostController::class, 'show'])->name('post.get');
    Route::post('/submit', [PostController::class, 'store'])->name('post.store');
    Route::post('/{id}/update', [PostController::class, 'update'])->name('post.update');
    Route::post('/{id}/delete', [PostController::class, 'destroy'])->name('post.delete');
});
