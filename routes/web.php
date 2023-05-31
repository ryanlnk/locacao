<?php

use App\Http\Livewire\Admin\Carros\Carros;
use App\Http\Livewire\Admin\Carros\CarrosForm;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Carros::class);

Route::get('/carros', Carros::class);

Route::get('/carroscriar', CarrosForm::class);
