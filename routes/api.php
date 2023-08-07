<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CityDoctorController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorPatientController;
use App\Http\Controllers\PatientController;

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

Route::middleware('auth:api')->group(function () {
    Route::post('/medicos/{doctor_id}/pacientes', [DoctorPatientController::class, 'store']);
    Route::get('/medicos/{doctor_id}/pacientes', [DoctorPatientController::class, 'index']);

    Route::post('/pacientes', [PatientController::class, 'store']);
    Route::put('/pacientes/{patient_id}', [PatientController::class, 'update']);
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
});

Route::get('/cidades', [CityController::class, 'index']);
Route::get('/cidades/{id}/medicos', [CityDoctorController::class, 'index']);
Route::get('/medicos', [DoctorController::class, 'index']);
