<?php

use App\Http\Livewire\Page\HomeComponent;
use App\Http\Livewire\Page\LoginComponent;
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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get("/login", LoginComponent::class)->name('login');
Route::get("/dashboard", HomeComponent::class)->name('dashboard');
