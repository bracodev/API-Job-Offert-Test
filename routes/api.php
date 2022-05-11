<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobOffertController;

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

Route::group(['middleware' => 'api'], function ($router) {

    /** 1. Autenticación utilizando JWT. */
    Route::post('login', [UserController::class, 'login']);

    /** 2. En un endpoint REST queremos almacenar registros de tipo usuario */
    Route::post('user', [UserController::class, 'store']);

    /** 3. Un endpoint REST que permita obtener todas las ofertas con candidatos asociados. */
    Route::post('job-offert', [JobOffertController::class, 'store']);

    /** 4. Un endpoint REST que permita obtener todas las ofertas con candidatos asociados. */
    Route::get('job-offert', [JobOffertController::class, 'index']);
});
