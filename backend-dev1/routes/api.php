<?php

use Illuminate\Http\JsonResponse;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
// 	return $request->user();
// });

// Checking app and server status
Route::get('/server-status', function () {
	try {
		return response()->json(
			[
				'message' => 'OK',
				'status'	=> '200'
			],
			JsonResponse::HTTP_OK
		);
	} catch (\Exception $e) {
		return response()->json(
			[
				'message' => 'BAD',
				'status'	=> '500',
				'info'    => $e->getMessage(),
			],
			JsonResponse::HTTP_INTERNAL_SERVER_ERROR
		);
	}
});
