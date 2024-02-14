<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Uncensor;
use App\Livewire\Stats;
use App\Livewire\Gachacalc;
use App\Livewire\Settings;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', Home::class);
Route::get('/uncensor', Uncensor::class);
Route::get('/stats', Stats::class);
Route::get('/gachacalc', Gachacalc::class);
Route::get('/settings', Settings::class);
