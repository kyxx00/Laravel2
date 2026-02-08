<?php

use App\Http\Controllers\PlanetController;
use App\Http\Controllers\SolarSystemController;
use Illuminate\Support\Facades\Route;

// Solar System routes
Route::get('/solarsystems', [SolarSystemController::class, 'index'])->name('solarsystems.index');
Route::get('/solarsystems/{id}', [SolarSystemController::class, 'show'])->name('solarsystems.show');

// Planet routes  
Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
Route::get('/planets/{planet}', [PlanetController::class, 'show'])->name('planets.show');