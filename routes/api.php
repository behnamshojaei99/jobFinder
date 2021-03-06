<?php

use App\Models\User;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
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

Route::get('/products', function(){
    return('products');
});


//protected routes
Route::group(['middleware'=> ['auth:sanctum']], function(){
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/getJobs', [JobController::class, 'getAllJob']);
Route::get('/getLatestJobs', [JobController::class, 'getLatestJob']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
