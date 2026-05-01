<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;
use App\Models\Program;
use App\Models\Catalog;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TV9xLPMaarifController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\ProgramImportController;

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');



// Halaman Utama
Route::get('/', function () {
    $today = date('N');
    $currentTime = \Carbon\Carbon::now()->format('H:i:s');
    
    $schedules = Program::where('day_of_week', $today)
                   ->where('end_time', '>=', $currentTime)
                   ->orderBy('start_time')
                   ->get();
                   
    $catalogs = Catalog::all();
                   
    return view('welcome', compact('schedules', 'catalogs'));
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

    // CSV Import routes MUST be declared before the resource to avoid {program} wildcard conflict
    Route::post('/program/import', [ProgramImportController::class, 'store'])->name('program.import');
    Route::get('/program/template', [ProgramImportController::class, 'template'])->name('program.template');
    
    Route::delete('/program/destroy-all', [ProgramController::class, 'destroyAll'])->name('program.destroyAll');
    Route::delete('/program/destroy-day/{day}', [ProgramController::class, 'destroyByDay'])->name('program.destroyByDay');

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

require __DIR__ . '/auth.php';


// Halaman Layanan
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');

// Halaman Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// Halaman Tentang Kami
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');


// Halaman TV9xLPMaarif
Route::get('/tv9xlpmaarif', [TV9xLPMaarifController::class, 'index'])->name('tv9xlpmaarif');