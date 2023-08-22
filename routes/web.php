<?php

use App\Observers\Email;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeekDayController;

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

Route::get('/strategy', [WeekDayController::class, 'index'])->name('strategy');

Route::get('/observer', function () {
    $email = app(Email::class);
    $email->notify();
})->name('observer');
