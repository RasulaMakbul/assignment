<?php

use App\Http\Controllers\UserEndController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feature', [UserEndController::class, 'features']);
Route::get('/projects', [UserEndController::class, 'projects']);
Route::get('/pricing', [UserEndController::class, 'pricing']);
Route::get('/aboutUs', [UserEndController::class, 'aboutUs']);
Route::get('/contactUs', [UserEndController::class, 'contactUs']);
Route::get('/login', [UserEndController::class, 'login']);
Route::get('/registration', [UserEndController::class, 'registration']);
