<?php

use App\Http\Controllers\Api\ParentController;
use App\Http\Controllers\Api\ChildController;
use App\Http\Controllers\Api\ProviderController;
use App\Http\Controllers\Api\OrganizationController;
use App\Http\Controllers\Api\VaccineController;
use App\Http\Controllers\Api\VaccinationController;
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

Route::apiResource('parent', ParentController::class);

Route::apiResource('child', ChildController::class);

Route::get('/child/{parent_id}', [ChildController::class, 'getByParent']);

Route::post('/parent/{parent}/children', [ChildController::class, 'store']);

Route::apiResource('provider', ProviderController::class);

Route::apiResource('organization', OrganizationController::class);

Route::apiResource('vaccine', VaccineController::class);

Route::apiResource('vaccination', VaccinationController::class);

Route::get('/child/{child_id}', [ChildController::class, 'show']);

Route::get('/child/{child_id}/vaccinations/status', [ChildController::class, 'getVaccinePeriod']);

Route::get('/child/{child_id}/vaccinations', [VaccinationController::class, 'getChildVaccinations']);

Route::put('/child/{child_id}/vaccinations/scan', [VaccinationController::class, 'updateAfterScan']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function () {
    return response()->json(['status' => 'OK']);
});

