<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [App\Http\Controllers\UI\PagesController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\UI\PagesController::class, 'about'])->name('about');
Route::get('/approach', [App\Http\Controllers\UI\PagesController::class, 'approach'])->name('approach');
Route::get('/get-in-touch', [App\Http\Controllers\UI\PagesController::class, 'getInTouch'])->name('get-in-touch');
Route::get('/where-am-i', [App\Http\Controllers\UI\PagesController::class, 'whereAmI'])->name('where-am-i');
Route::get('/therapeutic-space', [App\Http\Controllers\UI\PagesController::class, 'therapeuticSpace'])->name('therapeutic-space');

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});
//
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//
require __DIR__.'/auth.php';
