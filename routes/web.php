<?php

use App\Http\Controllers\CabinetController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\OrdonnanceController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\StockController;
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
Route::resource('consultations',ConsultationController::class);
Route::resource('paiments',PaiementController::class);
Route::resource('cabinets',CabinetController::class);
Route::resource('patients',PatientController::class);
Route::resource('ordonnances',OrdonnanceController::class);
Route::resource('rendezVous',RendezVousController::class);
Route::resource('paiments',RendezVousController::class);
Route::resource('produits',RendezVousController::class);
Route::resource('stock',StockController::class);


require __DIR__.'/auth.php';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                