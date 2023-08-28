<?php

use App\Http\Controllers\API\V1\GenderController;
use App\Http\Controllers\API\V1\PatientController;
use App\Http\Controllers\API\V1\PatientServiceController;
use App\Http\Controllers\API\V1\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('patients',PatientController::class);
Route::apiResource('services',ServiceController::class);
Route::apiResource('genders',GenderController::class);
Route::get('/patient-services', PatientServiceController::class);
