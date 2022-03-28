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
Route::get('/ntsexams',[TeacherController::class, 'ntsexams']);
Route::post('/newexamcd',[TeacherController::class, 'newexamcd']);
Route::get('/newexamc',[TeacherController::class, 'newexamc']);
Route::get('/examt',[TeacherController::class, 'examt']);
Route::get('/eresults',[StudentController::class, 'eresults']);
Route::get('/sexams',[StudentController::class, 'sexams']);
Route::get('/ssexams/{id}',[StudentController::class, 'ssexams'])->name('ssexams');
Route::get('/waiting',[StudentController::class, 'waiting']);


Route::post('/addq',[TeacherController::class,'addq']);
Route::post('/addqn',[TeacherController::class,'addqn']);
Route::post('/dsv',[TeacherController::class,'dsv']);
Route::post('/newq2',[TeacherController::class,'newq2']);
Route::post('/publish',[TeacherController::class,'publishex'])->name('publish');
Route::get('/publishexam/{id}',[TeacherController::class,'publishexam'])->name('publishexam');
Route::get('/answeringe/{id}',[TeacherController::class,'answeringe'])->name('answeringe');
Route::post('answeringed',[StudentController::class, 'answeringed']);








Route::resource('/users', UserController::class);

Route::get('/inl',[UserController::class, 'indexl']);