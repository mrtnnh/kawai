<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\MainController::class,'showtop'])->name('top');
Route::get('/top',[App\Http\Controllers\MainController::class,'showtop'])->name('top');
Route::get('/ses_top',[App\Http\Controllers\MainController::class,'show_ses_top'])->name('ses_top');
Route::get('/ses_top/ses',[App\Http\Controllers\MainController::class,'show_ses'])->name('ses');
Route::get('/work_top',[App\Http\Controllers\MainController::class,'show_work_top'])->name('work_top');
Route::get('/work_top/training',[App\Http\Controllers\MainController::class,'show_training'])->name('training');
Route::get('/work_top/work',[App\Http\Controllers\MainController::class,'show_work'])->name('work');
Route::get('/environmment',[App\Http\Controllers\MainController::class,'showenvironmment'])->name('environmment');
Route::get('/recruit',[App\Http\Controllers\MainController::class,'showrecruit'])->name('recruit');
Route::post('/entry',[App\Http\Controllers\EntryFormController::class,'store'])->name('entry.store');
Route::get('/entry',[App\Http\Controllers\MainController::class,'showentry'])->name('entry');
Route::get('/ses_form',[App\Http\Controllers\MainController::class,'show_ses_form'])->name('ses_form');
Route::post('/ses_form',[App\Http\Controllers\SesFormController::class,'store'])->name('ses.store');
Route::get('/complete',[App\Http\Controllers\MainController::class,'showcomplete'])->name('complete');
Route::get('/interview',[App\Http\Controllers\MainController::class,'showinterview1'])->name('interview');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
