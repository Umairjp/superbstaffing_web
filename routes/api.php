<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

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
  Route::post('register', [ApiController::class,'register']);
  Route::post('login',  [ApiController::class,'login']);
  Route::get('logout', [ApiController::class,'logout'] );
  Route::post('forgot', [ApiController::class,'forgot']);
  Route::post('forgot/submit', [ApiController::class,'forgot_submit']);
  Route::post('social/login', [ApiController::class,'social_login']);
  Route::post('refresh/token', [ApiController::class,'refresh']);
  Route::get('details', [ApiController::class,'details']);
  Route::post('/sendnotification', [ApiController::class,'sendNotification']);
  Route::post('/testnot', [ApiController::class,'testnot']);

});


Route::fallback(function () {
  return response()->json(['status' => false, 'data' => [], 'error' => ['message' => 'Not Found!']], 404);
});
