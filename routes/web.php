<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\TailorController;
use App\Http\Controllers\PackageController;

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

// Corrected route
Route::get('/', [WebController::class, 'index'])->name('homepage');
Route::get('/choice', [WebController::class, 'regChoice'])->name('choice');
Route::get('/tailors', [WebController::class, 'showTailors'])->name('tailor.all');




// tailor routes
Route::get('/register-tailor', [TailorController::class, 'showRegistrationForm'])->name('tailor.form');
Route::post('/register-tailor', [TailorController::class, 'registerAsTailor'])->name('tailor.register');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
       if(Auth::User()->role == "Tailor")
       {
        return view('tailor.dashboard');
       }
       else if(Auth::User()->role == "admin")
       {
        return view('admin.dashboard');
       }
       else
       {
        return view('web.index');
       }
    })->name('dashboard');
    // packages routes
    Route::get('/packages', function () {
        $tailorId = auth()->user()->id;
        $package = \App\Models\Packages::where('tailor_id', $tailorId)->first();
    
        if ($package) {
            return redirect()->route('packages.edit')->with('error', 'You already added a package.');
        }
    
        return view('packages.form');
    })->name('packages.page');
Route::post('/packages', [PackageController::class, 'store'])->name('packages.store');
Route::get('/tailors/{id}', [WebController::class, 'showTailorProfile'])->name('tailor.show');
Route::get('/editServices', [PackageController::class, 'editServices'])->name('packages.edit');
});
