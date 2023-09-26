<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', App\Livewire\Website\Home::class)->name('home');
Route::get('about', App\Livewire\Website\About\About::class)->name('about');
Route::get('services', App\Livewire\Website\Services\Services::class)->name('services');
Route::get('portfolio', App\Livewire\Website\Portfolio\Portfolio::class)->name('portfolio');
Route::get('team', App\Livewire\Website\Team\Team::class)->name('team');
Route::get('contact', App\Livewire\Website\Contact\Contact::class)->name('contact');
Route::get('service/details', App\Livewire\Website\ServiceDetails\Details::class)->name('details');





Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('admin/dashboard', App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('services', App\Livewire\Admin\Services\Services::class)->name('services');
    Route::get('providers', App\Livewire\Admin\Providers\Providers::class)->name('providers');


});

// Route::middleware('auth', 'role:serviceProvider')->group(function () {
//     Route::get('serviceProvider/dashboard', App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');

// });
