<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\AdvanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MdController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
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


Route::get('/',[HomeController::class, 'index'])->name('welcome');
Route::get('contact',[ContactController::class,'index'])->name('contact.index');
Route::get('about',[AboutController::class,'index'])->name('about.index');
Route::get('advantage',[AdvanController::class,'index'])->name('advantage.index');
Route::get('mdmessage',[MdController::class,'index'])->name('md.index');
Route::get('teams',[TeamController::class,'index'])->name('team.index');
Route::get('network',[NetworkController::class,'index'])->name('network.index');
Route::get('service',[ServiceController::class,'index'])->name('service.index');
Route::get('process',[ProcessController::class,'index'])->name('process.index');
Route::get('gallery',[ActivitiesController::class,'index'])->name('gallery.index');

