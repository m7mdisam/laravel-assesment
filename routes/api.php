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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;

Route::apiResource('franchises', FranchiseController::class);
Route::apiResource('schedules', ScheduleController::class);
Route::apiResource('parents', ParentController::class);
Route::apiResource('students', StudentController::class);
