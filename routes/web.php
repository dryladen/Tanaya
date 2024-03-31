<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
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

Route::get('/',[IndexController::class, 'index'])->name('dashboard');
Route::get('/login',[IndexController::class, 'login'])->name('login');
Route::post('/login',[IndexController::class, 'loginPost'])->name('login.post');
Route::get('/logout',[IndexController::class, 'logout'])->name('logout');
// admin
Route::get('/client',[ClientController::class, 'index'])->name('client');
Route::post('/client/store',[ClientController::class, 'store'])->name('client.store');
Route::post('/client/edit/{id}',[ClientController::class, 'edit'])->name('client.edit');
Route::delete('/client/{id}/delete',[ClientController::class, 'delete'])->name('client.delete');
Route::get('/project',[ProjectController::class, 'index'])->name('project');
Route::post('/project/store',[ProjectController::class, 'store'])->name('project.store');
Route::post('/project/edit/{id}',[ProjectController::class, 'edit'])->name('project.edit');
Route::delete('/project/{id}/delete',[ProjectController::class, 'delete'])->name('project.delete');
Route::get('/users',[UserController::class, 'index'])->name('users');
Route::post('/users/store',[UserController::class, 'store'])->name('users.store');
Route::post('/users/edit/{id}',[UserController::class, 'edit'])->name('users.edit');
Route::delete('/users/{id}/delete',[UserController::class, 'delete'])->name('users.delete');



