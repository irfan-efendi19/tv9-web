<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Program;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\NewsController;

// Halaman Utama - Digital Minaret
Route::get('/', function () {
    $today = date('N');
    $currentTime = \Carbon\Carbon::now()->format('H:i:s');
    
    $schedules = Program::where('day_of_week', $today)
                   ->where('end_time', '>=', $currentTime)
                   ->orderBy('start_time')
                   ->get();
                   
    return view('welcome', compact('schedules'));
})->name('beranda');

// Halaman Live
Route::get('/live', function () {
    $today = date('N');
    $currentTime = \Carbon\Carbon::now()->format('H:i:s');
    
    $schedules = Program::where('day_of_week', $today)
                   ->where('end_time', '>=', $currentTime)
                   ->orderBy('start_time')
                   ->get();

    return view('live', compact('schedules'));
})->name('live');

// Halaman Jadwal
Route::get('/jadwal', function () {
    $programs = Program::orderBy('day_of_week')
                    ->orderBy('start_time')
                    ->get()
                    ->groupBy('day_of_week');
    return view('jadwal', compact('programs'));
})->name('jadwal');

// Katalog Program (Public)
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');

// Berita Terkini (Jurnal9 API)
Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');

// CRUD Management (Admin Only)
Route::middleware(['auth'])->group(function () {
    Route::resource('catalog', CatalogController::class)->except(['index']);
    Route::resource('program', ProgramController::class)->except(['index']);
});

// Default Breeze Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
