<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModelAssetController;
use Illuminate\Support\Str;
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
// Route::prefix("/user")->group(function (){
//     Route::post("/login",[LoginController::class,"login"]);
// });
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
Route::post("/login",[LoginController::class,"login"]);
Route::group(['middleware' => ['auth:api','cors']],function() {
    // Route::post("/login",[LoginController::class,"login"]);
    Route::post("/auth/user",[UserController::class,"getUser"]);
    Route::get("/auth/user/{id}",[UserController::class,"getUserSpecific"]);
});

Route::get("/auth/3d/godzilla",[ModelAssetController::class,"load3d"])->middleware("auth:api");

// Route::middleware('auth:api')->
