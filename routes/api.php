<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GlphController;

use App\Http\Controllers\TasksDBController;

use App\Http\Controllers\TestDBController;

use App\Http\Controllers\AchivController;

use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::any('/admin/table/gliphs/del/{id}', [GlphController::class, 'index']);
// Route::any('/admin/table/tests/del/{id}', [TestDBController::class, 'destroy']);
// Route::any('/admin/table/tasks/del/{id}', [TasksDBController::class, 'destroy']);
// Route::any('/admin/table/achiv/del/{id}', [AchivController::class, 'destroy']);
// Route::any('/admin/table/user/del/{id}', [UserController::class, 'destroy']);