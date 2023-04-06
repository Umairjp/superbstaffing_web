<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\AuthController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'auth'], function () {

  Route::post('register', [AuthController::class,'register']);
  Route::post('login',  [AuthController::class,'login']);
  Route::post('logout', [AuthController::class,'logout'] );
  Route::post('forgot', [AuthController::class,'forgotPassword']);
  Route::post('reset-password', [AuthController::class,'resetPassword']);
  Route::post('social/login', [ApiController::class,'social_login']);
  Route::post('refresh/token', [ApiController::class,'refresh']);
  Route::get('details', [ApiController::class,'details']);
  Route::post('/sendnotification', [ApiController::class,'sendNotification']);
  Route::post('/testnot', [ApiController::class,'testnot']);

});


Route::fallback(function () {
  return response()->json(['status' => false, 'data' => [], 'error' => ['message' => 'Not Found!']], 404);
});


Route::group(['middleware' => ['auth:sanctum']], function () {
  // protected routes go here
  Route::get('/one', function(){
    echo json_encode('jkhsd fkjhskdfjhskdjfhk');
  });
});
