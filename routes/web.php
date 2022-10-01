<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\websiteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('create-employees', [websiteController::class,'create']);
Route::post('store-employees', [websiteController::class,'store']);
Route::get('all-employees', [websiteController::class,'read']);
Route::get('edit-employees/{id}', [websiteController::class,'edit']);
Route::post('update-employees/{id}', [websiteController::class,'update']);
Route::get('delete-employees/{id}', [websiteController::class,'delete']);


Route::get('std-info',[websiteController::class, 'std']);