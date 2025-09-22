<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Basic Route
Route::get('/about', function () {
    return view('about');
});

// Named Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact.page');

// ID Route
Route::get('/pengguna/{id}', function ($id) {
    $id= 1;
    return "Profil Pengguna dengan ID: " . $id;
});

// Grouping route
Route::prefix('manage')->group(function () {

    Route::get('/edit-profile', function () {
        return view ("manage.edit");
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Session Middleware Example
Route::get('/rahasia', function() {
    return "ini path rahasia";
})->middleware(middleware: ['auth','RoleCheck:admin']);

// Controller Route
// Route::get('/product', [ProductController::class, 'index']);

// Controller Route with Parameter
Route::get('/product/{angka}', [ProductController::class, 'index']
)->middleware(middleware: ['auth', 'RoleCheck:admin,owner']);


require __DIR__.'/auth.php';
