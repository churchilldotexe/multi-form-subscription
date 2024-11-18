<?php

use App\Http\Controllers\AddOnController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InfoController::class, 'create']);
Route::post('/', [InfoController::class, 'store']);

Route::get('/plans', [PlanController::class, 'create']);
Route::post('/plans', [PlanController::class, 'store']);

Route::get('/add-ons ', [AddOnController::class, 'create']);
Route::post('/add-ons ', [AddOnController::class, 'store']);

// Route::get('/add-ons', function () {
//     return view('add-ons.create');
// });

Route::get('/summary', function () {
    // dd(request()->session()->all());
    return view('summary.index');
});
