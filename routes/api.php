<?php

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

Route::post('create-citizen', [App\Http\Controllers\Admin\CitizenController::class, 'store']);
Route::post('get-citizen-create-data', [App\Http\Controllers\Admin\CitizenController::class, 'create']);
Route::get('get-citizen/{id}', [App\Http\Controllers\Admin\CitizenController::class, 'show']);
Route::get('search-citizen/{search}', [App\Http\Controllers\Admin\CitizenController::class, 'search']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
