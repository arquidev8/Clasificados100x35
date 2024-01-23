<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\JobsProductController;
use App\Http\Controllers\ServiceProductController;
use App\Http\Controllers\VehiclesProductController;
use App\Http\Controllers\RealEstateProductController;
use App\Http\Controllers\MerchandisesProductController;

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

// Route::get('/', [WelcomeController::class, 'index']);
// Route::get('/real-estate', [RealEstateProductController::class, 'index']);
// Route::get('/merchandise', [MerchandisesProductController::class, 'index']);
// Route::get('/real-estate/{id}', [RealEstateProductController::class, 'show'])->name('show');

// Route::get('/', [RealEstateProductController::class, 'welcome']);
// Route::get('/', [MerchandisesProductController::class, 'welcome']);


Route::get('/', [WelcomeController::class, 'index']);

Route::get('/', [MerchandisesProductController::class, 'welcome']);

Route::get('/real-estate', [RealEstateProductController::class, 'index']);
Route::get('/real-estate/{id}', [RealEstateProductController::class, 'show'])->name('showRealEstate');

Route::get('/merchandise', [MerchandisesProductController::class, 'index'])->name('merchandise');
Route::get('/merchandise/{id}', [MerchandisesProductController::class, 'show'])->name('showMerchandise');

Route::get('/vehicles', [VehiclesProductController::class, 'index'])->name('vehicles');
Route::get('/vehicles/{id}', [VehiclesProductController::class, 'show'])->name('showVehicles');

Route::get('/jobs', [JobsProductController::class, 'index'])->name('jobs');
Route::get('/jobs/{id}', [JobsProductController::class, 'show'])->name('showJobs');


Route::get('/services', [ServiceProductController::class, 'index'])->name('services');
Route::get('/services/{id}', [ServiceProductController::class, 'show'])->name('showServices');


Route::get('/search', [SearchController::class, 'index'])->name('search');


