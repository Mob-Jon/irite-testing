<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateStoryController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/story', [CreateStoryController::class, 'index']);
Route::get('/story/{story}', [CreateStoryController::class, 'show']);
Route::post('/story', [CreateStoryController::class , 'store']);
Route::put('/story/{story}', [CreateStoryController::class, 'update']);
Route::patch('/story/{title}', [CreateStoryController::class, 'updateSpecific']);
Route::delete('/story/{story}', [CreateStoryController::class, 'destroy']);
