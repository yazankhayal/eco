<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\HomePageController::class,'index'])->name('index');
Route::get('/api/1',[\App\Http\Controllers\HomePageController::class,'api_1'])->name('api_1');
Route::get('/api/2',[\App\Http\Controllers\HomePageController::class,'api_2'])->name('api_2');
Route::get('/api/3',[\App\Http\Controllers\HomePageController::class,'api_3'])->name('api_3');
Route::get('/api/4',[\App\Http\Controllers\HomePageController::class,'api_4'])->name('api_4');
Route::get('/api/5',[\App\Http\Controllers\HomePageController::class,'api_5'])->name('api_5');
Route::get('/part/3',[\App\Http\Controllers\HomePageController::class,'part_3'])->name('part_3');

Route::get('/location',[\App\Http\Controllers\LocationController::class,'location'])->name('location');
Route::get('/location/create',[\App\Http\Controllers\LocationController::class,'location_create'])->name('location_create');
Route::get('/location/edit/{id?}',[\App\Http\Controllers\LocationController::class,'location_edit'])->name('location_edit');
Route::post('/location/create/store',[\App\Http\Controllers\LocationController::class,'location_store'])->name('location_store');
Route::post('/location/create/update',[\App\Http\Controllers\LocationController::class,'location_update'])->name('location_update');
Route::post('/location/create/delete',[\App\Http\Controllers\LocationController::class,'location_delete'])->name('location_delete');
Route::get('/get/location/ajax',[\App\Http\Controllers\LocationController::class,'location_ajax'])->name('location_ajax');

Route::get('/user',[\App\Http\Controllers\UserController::class,'user'])->name('user');
Route::get('/user/create',[\App\Http\Controllers\UserController::class,'user_create'])->name('user_create');
Route::get('/user/edit/{id?}',[\App\Http\Controllers\UserController::class,'user_edit'])->name('user_edit');
Route::post('/user/create/store',[\App\Http\Controllers\UserController::class,'user_store'])->name('user_store');
Route::post('/user/create/update',[\App\Http\Controllers\UserController::class,'user_update'])->name('user_update');
Route::post('/user/create/delete',[\App\Http\Controllers\UserController::class,'user_delete'])->name('user_delete');
Route::get('/get/user/ajax',[\App\Http\Controllers\UserController::class,'user_ajax'])->name('user_ajax');
