<?php

use App\Http\Controllers\APIDocsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommandsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\VoteController;
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

//public route
//user
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
//post
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/{post}', [PostsController::class, 'show']);
Route::get('/posts/search/{title}', [PostsController::class, 'search']);
//command
Route::get('/commands', [CommandsController::class, 'index']);
Route::get('/posts/{post}/commands', [CommandsController::class, 'show']);




//protected route
Route::group(['middleware' => ['auth:sanctum']],function(){
    //user
    Route::post('/user', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/user/update', [AuthController::class, 'update']);
    //post
    Route::post('/posts', [PostsController::class, 'store']);
    Route::put('/posts/{id}', [PostsController::class, 'update']);
    Route::delete('/posts/{id}', [PostsController::class, 'destroy']);
    //command
    Route::post('/commands', [CommandsController::class, 'store']);
    Route::delete('/commands/{id}', [CommandsController::class, 'destroy']);
    //vote
    Route::post('/vote', [VoteController::class, 'store']);
    Route::delete('/vote/{id}', [VoteController::class, 'destroy']);


});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
