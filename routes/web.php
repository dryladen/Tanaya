<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContentController;
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

Route::get('/', [IndexController::class, 'index'])->name('company');
Route::get('/admin', [IndexController::class, 'login'])->name('admin.login');
Route::post('/admin', [IndexController::class, 'loginPost'])->name('admin.post');
Route::get('/logout', [IndexController::class, 'logout'])->name('logout');
// admin

Route::middleware('auth')->prefix('admin')->group(function () {
  Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');
  Route::controller(ClientController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
    Route::get('/client', 'index')->name('client');
    Route::post('/client/store', 'store')->name('client.store');
    Route::post('/client/edit/{id}', 'edit')->name('client.edit');
    Route::delete('/client/{id}/delete', 'delete')->name('client.delete');
  });
  Route::controller(ProjectController::class)->group(function () {
    Route::get('/project',  'index')->name('project');
    Route::post('/project/store',  'store')->name('project.store');
    Route::post('/project/edit/{id}',  'edit')->name('project.edit');
    Route::delete('/project/{id}/delete',  'delete')->name('project.delete');
  });
  Route::controller(UserController::class)->group(function () {
    Route::get('/users',  'index')->name('users');
    Route::post('/users/store',  'store')->name('users.store');
    Route::post('/users/edit/{id}',  'edit')->name('users.edit');
    Route::delete('/users/{id}/delete',  'delete')->name('users.delete');
  });
});
