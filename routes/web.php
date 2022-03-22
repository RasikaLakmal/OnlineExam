<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Frontendcontroller;
use App\Http\Controllers\UserController;
use App\user;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;


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

Route::get('/',[Frontendcontroller::class, 'home']);

Route::get('/profile',[Frontendcontroller::class, 'profile'])->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';





Route::get('/dashboard',[TeacherController::class, 'dashboard']);
Route::get('/mse',[TeacherController::class, 'mse']);
Route::get('/texams',[TeacherController::class, 'texams']);
Route::get('/tsexams/{id}',[TeacherController::class, 'tsexams'])->name('tsexams');
Route::get('/examt',[TeacherController::class, 'examt']);
Route::get('/eresults',[StudentController::class, 'eresults']);
Route::get('/sexams',[StudentController::class, 'sexams']);
Route::get('/ssexams/{id}',[StudentController::class, 'ssexams'])->name('tsexams');
Route::get('/waiting',[StudentController::class, 'waiting']);

Route::get('/sstp/{email}',[Frontendcontroller::class, 'sstp'])->name('sstp');
Route::get('/sacp/{email}',[Frontendcontroller::class, 'sacp'])->name('sacp');
Route::get('/sinp/{email}',[Frontendcontroller::class, 'sinp'])->name('sinp');
Route::post('/addq',[TeacherController::class,'addq']);
Route::post('/newq2',[TeacherController::class,'newq2']);








Route::resource('/users', UserController::class);

Route::get('/inl',[UserController::class, 'indexl']);