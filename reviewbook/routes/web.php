<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GendreController;

Route::get('/',[DashboardController::class,'utama' ] );
Route:: get('/signup',[FormController::class, 'register']);
Route::post('/kirim',[FormController::class,'home' ]);



Route::get('/master', function(){
    return view('layouts.master');
});

//CRUD gendre
//1.CREATE DATA
Route ::get('/gendre/create',[GendreController::class, 'create']);
Route ::post('/gendre',[GendreController::class, 'store']);

//2.READ DATA
Route::get('/gendre',[GendreController::class,'index']);
Route::get('/gendre/{id}',[GendreController::class,'show']);

//3.UPDATE DATA
Route::get('/gendre/{id}/edit', [GendreController::class, 'edit']);
Route::put('/gendre/{id}', [GendreController::class, 'update']);

//4.DELETE DATA
Route::delete('/gendre/{id}',[GendreController::class,'destroy']);