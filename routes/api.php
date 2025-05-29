<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\NoteWarningController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\PartnerController;


Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

Route::apiResource('volunteers', VolunteerController::class);
Route::apiResource('events', EventController::class);
Route::apiResource('attendances', AttendanceController::class);
Route::apiResource('evaluations', EvaluationController::class);
Route::apiResource('note-warnings', NoteWarningController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('campaigns', CampaignController::class);
Route::apiResource('partners', PartnerController::class);

