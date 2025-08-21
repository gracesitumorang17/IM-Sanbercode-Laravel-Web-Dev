<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/',[DashboardController::class,'utama' ] );
Route:: get('/signup',[FormController::class, 'register']);
Route::post('/kirim',[FormController::class,'home' ]);



Route::get('/master', function(){
    return view('layouts.master');
});