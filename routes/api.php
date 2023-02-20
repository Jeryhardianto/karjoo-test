<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnualLeaves;

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

Route::group(['prefix' => 'annual-leaves'], function () {
    Route::post('/', [AnnualLeaves::class, 'store']);
    Route::get('/', [AnnualLeaves::class, 'index']);
    Route::get('/{id}', [AnnualLeaves::class, 'show']);
});
