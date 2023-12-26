<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
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


Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::controller(TripController::class)->group(function(){
    Route::get('/trips', 'index')->name('trips.index');
    Route::get('/trips/create', 'create')->name('trips.create');
    Route::post('/trips', 'store')->name('trips.store');
    Route::get('/trips/{id}', 'show')->name('trips.show');
    Route::get('/trips/{id}/edit', 'edit')->name('trips.edit');
    Route::put('/trips/{id}', 'update')->name('trips.update');
    Route::delete('/trips/{id}', 'destroy')->name('trips.destroy');
});

// Location Routes

Route::controller(LocationController::class)->group(function(){
    Route::get('/locations', 'index')->name('locations.index');
    Route::get('/locations/create', 'create')->name('locations.create');
    Route::post('/locations', 'store')->name('locations.store');
    Route::get('/locations/{id}', 'show')->name('locations.show');
    Route::get('/locations/{id}/edit', 'edit')->name('locations.edit');
    Route::put('/locations/{id}', 'update')->name('locations.update');
    Route::delete('/locations/{id}', 'destroy')->name('locations.destroy');
});

// Bus Routes

Route::controller(BusController::class)->group(function(){
    Route::get('/buses', 'index')->name('buses.index');
    Route::get('/buses/create', 'create')->name('buses.create');
    Route::post('/buses', 'store')->name('buses.store');
    Route::get('/buses/{id}', 'show')->name('buses.show');
    Route::get('/buses/{id}/edit', 'edit')->name('buses.edit');
    Route::put('/buses/{id}', 'update')->name('buses.update');
    Route::delete('/buses/{id}', 'destroy')->name('buses.destroy');
});

// Bus Routes

Route::controller(TicketController::class)->group(function(){
    Route::get('/tickets', 'index')->name('tickets.index');
    Route::get('/tickets/create', 'create')->name('tickets.create');
    Route::post('/tickets', 'store')->name('tickets.store');
    Route::get('/tickets/{id}', 'show')->name('tickets.show');
    Route::get('/tickets/{id}/edit', 'edit')->name('tickets.edit');
    Route::put('/tickets/{id}', 'update')->name('tickets.update');
    Route::delete('/tickets/{id}', 'destroy')->name('tickets.destroy');
});

// Bus Routes

Route::controller(UserController::class)->group(function(){
    Route::get('/users', 'index')->name('users.index');
    Route::get('/users/create', 'create')->name('users.create');
    Route::post('/users', 'store')->name('users.store');
    Route::get('/users/{id}', 'show')->name('users.show');
    Route::get('/users/{id}/edit', 'edit')->name('users.edit');
    Route::put('/users/{id}', 'update')->name('users.update');
    Route::delete('/users/{id}', 'destroy')->name('users.destroy');
});
