<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SessionNoteController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AdvisorAssignmentController;
use App\Http\Controllers\StudentProgramAssignmentController;
use App\Http\Controllers\DepartmentAdvisorAssignmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResultsController;

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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');



Route::resource('advisors', AdvisorController::class);
Route::resource('advisor-assignments', AdvisorAssignmentController::class);
Route::resource('appointments', AppointmentController::class);
Route::resource('appointments', AppointmentController::class);
Route::resource('schedules', ScheduleController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('department-advisor-assignments', DepartmentAdvisorAssignmentController::class);
Route::resource('feedback', FeedbackController::class);
Route::resource('notifications', NotificationController::class);
Route::resource('programmes', ProgrammeController::class);
Route::resource('session-notes', SessionNoteController::class);
Route::resource('students', StudentController::class);
Route::resource('results', ResultsController::class);
Route::resource('student-program-assignments', StudentProgramAssignmentController::class);



