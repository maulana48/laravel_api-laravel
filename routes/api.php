<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\{ EController, BlogController };

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

Route::prefix('e-commerce')
    ->name('api-product.')
    ->controller(EController::class)
    ->group(function () {
        Route::get('/', 'index')->name('list');
        Route::get('/{product}', 'show')->name('detail');
        
        Route::post('/', 'store')->name('store');
        Route::post('/update/{product}', 'update')->name('update');
        Route::post('/{product}', 'destroy')->name('destroy');
});

Route::prefix('blog')
    ->name('blog.')
    ->controller(BlogController::class)
    ->group(function () {
        Route::get('/', 'index')->name('list');
        Route::get('/show/{post}', 'show')->name('detail');

        Route::get('/categories/{category}', 'categories')->name('category');
        Route::get('/authors/{user}', 'authors')->name('author');
        
        Route::post('/', 'store')->name('store');
        Route::post('/update/{post}', 'update')->name('update');
        Route::post('/{post}', 'destroy')->name('destroy');
});