<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AutregController;

use App\Http\Controllers\KabController;

use App\Http\Controllers\TestController;

use App\Http\Controllers\DatabaseController;

use App\Http\Controllers\TasksController;

use App\Http\Controllers\GlphController;

use App\Http\Controllers\TasksDBController;

use App\Http\Controllers\TestDBController;

use App\Http\Controllers\AChivController;

use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AutregController::class, 'main']);

Route::post('/auth', [AutregController::class, 'auth'])->name('auth');
Route::post('/reg', [AutregController::class, 'reg'])->name('reg');

Route::any('/admin/adminU', [DatabaseController::class, 'startU']);
Route::any('/admin/adminT', [DatabaseController::class, 'startT']);
// Route::any('/admin/table/{table}', [DatabaseController::class, 'showTable']);
// Route::any('/admin/table/{table}/del/{id}', [DatabaseController::class, 'del']);
// Route::any('/admin/table/{table}/upd/{id}', [DatabaseController::class, 'upd']);
// Route::any('/admin/table/{table}/ins', [DatabaseController::class, 'ins']);

Route::any('/admin/table/gliphs', [GlphController::class, 'index']);
Route::any('/admin/table/gliphs/del/{id}', [GlphController::class, 'destroy']);
Route::post('/admin/table/gliphs/upd/{id}', [GlphController::class, 'update']);
Route::post('/admin/table/gliphs/ins', [GlphController::class, 'store']);

Route::any('/admin/table/tests', [TestDBController::class, 'index']);
Route::any('/admin/table/tests/del/{id}', [TestDBController::class, 'destroy']);
Route::post('/admin/table/tests/upd/{id}', [TestDBController::class, 'update']);
Route::post('/admin/table/tests/ins', [TestDBController::class, 'store']);

Route::any('/admin/table/tasks', [TasksDBController::class, 'index']);
Route::any('/admin/table/tasks/del/{id}', [TasksDBController::class, 'destroy']);
Route::post('/admin/table/tasks/upd/{id}', [TasksDBController::class, 'update']);
Route::post('/admin/table/tasks/ins', [TasksDBController::class, 'store']);

Route::any('/admin/table/achivs', [AchivController::class, 'index']);
Route::any('/admin/table/achivs/del/{id}', [AchivController::class, 'destroy']);
Route::post('/admin/table/achivs/upd/{id}', [AchivController::class, 'update']);
Route::post('/admin/table/achivs/ins', [AchivController::class, 'store']);

Route::any('/admin/table/users', [UserController::class, 'index']);
Route::any('/admin/table/users/del/{id}', [UserController::class, 'destroy']);
Route::post('/admin/table/users/upd/{id}', [UserController::class, 'update']);

Route::any('/lichkab/{name}', [KabController::class, 'lich'])->name('THEname');

Route::any('/tests/testTheory/{testId}', [TestController::class, 'toTheory']);
Route::any('/tests/testTasks/{id}', [TestController::class, 'toTask']);

Route::any('/tests/task/{i}', [TasksController::class, 'taskShow']);
Route::any('/tests/tasks/prov/{id}/{a}', [TasksController::class, 'prov']);
Route::any('/tests/tasks/itog', [TasksController::class, 'itog']);

Route::post('/forCertificate/{id}', [UserController::class, 'forPDF']);
Route::post('/forCertificateA/{id}', [UserController::class, 'forPDFExist']);