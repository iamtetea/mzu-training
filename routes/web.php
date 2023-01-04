<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::resources([
    'contact' => ContactController::class,
    'departments' => DepartmentController::class,
]);

// Route::resource('contact', ContactController::class);
// Route::resource('departments', ContactController::class);

// Route::get('/departments', [DepartmentController::class, 'index']);
// Route::get('/departments/{id}', [DepartmentController::class, 'show']);
// Route::post('/departments', [DepartmentController::class, 'store']);
// Route::put('/departments/{id}', [DepartmentController::class, 'update']);
// Route::delete('/departments/{id}', [DepartmentController::class, 'destroy']);
