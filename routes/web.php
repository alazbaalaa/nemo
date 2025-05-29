<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteWarningController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\PartnerController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('volunteers', VolunteerController::class);

Route::resource('events', EventController::class);

Route::resource('attendances', AttendanceController::class);

Route::resource('evaluations', EvaluationController::class);

Route::resource('users', UserController::class);

Route::resource('note-warnings', NoteWarningController::class);

Route::resource('campaigns', CampaignController::class);

Route::resource('partners', PartnerController::class);
