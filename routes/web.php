<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ManagerStores\StoresController;
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

Route::controller(ComponentController::class)->group(function () {
    Route::get('render-provinces', 'renderProvinces')->name('components.render-provinces');
});


Route::domain('shop.' . env("APP_DOMAIN"))->group(function () {
    Route::controller(StoresController::class)->group(function () {
        Route::get('/', 'index')->name('manager.shop');
        Route::put('account/edit/{slug}', 'update')->name('manager.update.shop1');
        Route::get('account/update/{slug}', 'formCU')->name('manager.update.shop');
        Route::get('account/register', 'formCU')->name('register.shop');
        Route::post('account/register', 'register')->name('register.shop');
    })->middleware(['auth']);
});

Route::get('/', function () {
    return view('home');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
