<?php

use App\Http\Controllers\CabinetController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\OrdonnanceController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
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
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('medecins',MedecinController::class);
Route::resource('paiments',PaiementController::class);
Route::resource('cabinets',CabinetController::class);
Route::resource('patients',PatientController::class);
Route::resource('ordonnances',OrdonnanceController::class);
require __DIR__.'/auth.php';
