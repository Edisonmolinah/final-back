<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::post('/login', [ApiAuthController::class, 'login']);
    Route::post('/register',[ApiAuthController::class, 'register']);
    
});
Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::get('category/all', [CategoryController::class, 'all']);
    Route::post('category/store', [CategoryController::class, 'store']);
    Route::get('category/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('category/{id}/update', [CategoryController::class, 'update']);
    Route::delete('category/{id}/destroy', [CategoryController::class, 'destroy']);
    Route::group(['prefix' => 'post'], function(){
        Route::get('/all', [PostController::class, 'all']);
        Route::post('/store', [PostController::class, 'store']);
        Route::get('{id}/edit', [PostController::class, 'edit']);
        Route::put('{id}/update', [PostController::class, 'update']);
        Route::delete('{id}/destroy', [PostController::class, 'destroy']);
    });
});


Route::post('oauth/token', 'Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
