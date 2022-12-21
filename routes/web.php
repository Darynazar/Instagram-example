<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{user}', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/p/create',[PostsController::class, 'create'])->name('p/create');
Route::post('/p', [PostsController::class, 'store'])->name('p.store');
Route::get('/p/{post}',[PostsController::class, 'show']);

Route::get('/profile/{user}/edit',[ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/profile/{user}/update',[ProfileController::class, 'update'])->name('profile.update');


