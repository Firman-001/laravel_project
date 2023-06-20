<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get("/", function () {
    return view('Welcome');
});

Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['milddleware' => ['Auth']], function () {

    Route::get("/dashboard", HomeComponent::class)->name("dashboard");
});
