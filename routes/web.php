<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Page\HomeComponent;
use App\Http\Livewire\Page\LoginComponent;

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


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
Route::middleware(['guest'])->group(function () {
    Route::get("/login", LoginComponent::class)->name("login");
});
Route::middleware(['auth'])->group(function () {
    Route::get("/", HomeComponent::class)->name("dashboard");
});

