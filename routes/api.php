<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarAdminController;
use App\Http\Controllers\MfController;

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
// Route::get('index', [CarAdminController::class,'index']);
Route::apiResource('cars', CarAdminController::class);
Route::apiResource('mf', MfController::class);
Route::get('show', [CarAdminController::class, 'search']);
// Route::get('cars', CarAdminController::class);
// Route::post('cars/{id}', [CarAdminController::class,'update'] );
// Route::get('index',[MfController::class, "index"]);

