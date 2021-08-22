<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'index']);
Route::get('/find', [TestController::class, 'find']);
Route::post('/find', [TestController::class, 'search']);
Route::get('/inquiry/{inquiry}',[TestController::class, 'bind']);
Route::get('/add', [TestController::class, 'add']);
Route::post('/add', [TestController::class, 'create']);
Route::get('/inquiry', [TestController::class,'check']);
Route::post('/inquiry', [TestController::class,'checkUser']);
