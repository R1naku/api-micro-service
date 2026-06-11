<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;

Route::get('/tests', [TestController::class, 'index']);
Route::get('/tests/{id}', [TestController::class, 'show']);
Route::post('/tests', [TestController::class, 'store']);
Route::put('/tests/{id}', [TestController::class, 'update']);
Route::delete('/tests/{id}', [TestController::class, 'destroy']);