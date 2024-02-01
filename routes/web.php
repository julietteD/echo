<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RisingStarsController;
use App\Http\Controllers\YoungComposersController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [HomeController::class, 'index'])
->name('index');
Route::get('privacy', [PrivacyController::class, 'index'])
->name('privacy');
Route::get('contact', [ContactController::class, 'index'])
->name('contact');
Route::get('risingStars', [RisingStarsController::class, 'index'])
->name('risingStars');
Route::get('youngComposers', [YoungComposersController::class, 'index'])
->name('youngComposers');


Route::get('artist', [ArtistController::class, 'index'])
->name('artist');

Route::get('organisation', [OrganisationController::class, 'index'])
->name('organisation');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('artists', [AdminController::class, 'artists'])->name('admin.artists');
    Route::get('artists/new', [AdminController::class, 'editArtist'])->name('admin.artists.new');
    Route::get('artists/edit/{id}', [AdminController::class, 'editArtist'])->name('admin.artists.edit');
    Route::get('artists/delete/{id}', [AdminController::class, 'deleteArtist'])->name('admin.artists.delete');
    Route::post('artists/edit', [AdminController::class, 'editArtistAction'])->name('admin.artists.edit.action');

});

require __DIR__.'/auth.php';
