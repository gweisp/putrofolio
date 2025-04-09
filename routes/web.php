<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\AdminProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

// Skill, Contact, About
Route::view('/skills', 'skills')->name('skills');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');

//Contact

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Route untuk menampilkan form kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route untuk menyimpan pesan kontak
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Project (user only can view)
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

/*
|--------------------------------------------------------------------------
| Authenticated Routes (User)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('projects', AdminProjectController::class);
    });
Route::middleware(['auth', 'is_admin'])
    ->prefix('admin')
    ->name('admin.') // tambahkan prefix nama
    ->group(function () {
        Route::get('/projects', [AdminProjectController::class, 'index'])->name('projects');
        Route::get('/projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
        Route::post('/projects', [AdminProjectController::class, 'store'])->name('projects.store');
        Route::get('/projects/{project}/edit', [AdminProjectController::class, 'edit'])->name('projects.edit');
        Route::put('/projects/{project}', [AdminProjectController::class, 'update'])->name('projects.update');
        Route::delete('/projects/{project}', [AdminProjectController::class, 'destroy'])->name('projects.destroy');
        Route::resource('messages', \App\Http\Controllers\Admin\MessageController::class)->only(['index', 'show']);
        Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
        Route::get('/messages/{message}', [MessageController::class, 'show'])->name('messages.show');
        Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });

// Auth Routes (Login, Register, etc.)
require __DIR__ . '/auth.php';
