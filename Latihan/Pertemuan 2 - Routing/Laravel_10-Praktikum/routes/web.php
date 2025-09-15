 <?php

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

// Baisc Route
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
