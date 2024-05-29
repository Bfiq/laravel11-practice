<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Si la vista no necesita logica
//Route::view('/', 'welcome');

//Peticiones
/* Route::post();
Route::put();
Route::patch();
Route::delete(); */
//Varios o todos los tipos de peticiones
/* Route::match(['put', 'patch'], '/', function(){

});
Route::any('/', function(){

}); */

Route::view('contacto', 'contact')->name('contact');
Route::view('nosotros', 'about')->name('about');
Route::get('blog', [PostController::class, 'index'])->name('blog');
Route::get('/', function () { 
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
