<?php

use App\Http\Controllers\Backend\AdminDashboardController;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'admin','as' => 'admin.'],function(){

    Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');
});
