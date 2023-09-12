<?php

use App\Http\Controllers\Api\ProjectController;
use App\Models\Project;
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

// Project List Route
Route::get('/projects', function () {
    $projects = Project::all();
    return response()->json($projects);
});

Route::get('/projects', [ProjectController::class, 'index']);

Route::apiResource('projects', ProjectController::class);
