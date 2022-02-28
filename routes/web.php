<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

// Employee Thingy and Index
Route::get('/', [EmployeeController::class, 'index']);
Route::get('/create', [EmployeeController::class, 'create']);
Route::get('/{id}', [EmployeeController::class, 'id']);
Route::post('/pegawai', [EmployeeController::class, 'store']);
Route::get('/pegawai/{id}', [EmployeeController::class, 'delete']);
