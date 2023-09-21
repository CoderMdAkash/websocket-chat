<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ButtonClickedController;
use App\Http\Controllers\HomeController;

use App\Events\NewTrade;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [HomeController::class, 'dashboard']);

Route::post('button/clicked', [ButtonClickedController::class, 'index']);
Route::post('user-message-show/{senderId}/{recieverId}', [ButtonClickedController::class, 'userMgsShow']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
