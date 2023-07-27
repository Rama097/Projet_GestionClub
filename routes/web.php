<?php


use App\Http\Controllers\ClubController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Activite;
use App\Models\Club;
use App\Models\Membre;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Route Home
// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('logout', [HomeController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::delete('/users/destroy{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

    //Route Club
    Route::get('/clubs/create', [ClubController::class, 'create'])->name('clubs.create');
    Route::get('/clubs/index', [ClubController::class, 'index'])->name('clubs.index');
    Route::get('/clubs/edit/{id}', [ClubController::class, 'edit'])->name('clubs.edit');
    Route::delete('/clubs/destroy{id}', [ClubController::class, 'destroy'])->name('clubs.destroy');
    Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
    Route::post('/clubs/store', [ClubController::class, 'store'])->name('clubs.store');
    Route::put('/clubs/{club}', [ClubController::class, 'update'])->name('clubs.update');
});

// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
// Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
// Route::delete('/users/destroy{id}', [UserController::class, 'destroy'])->name('users.destroy');
// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
// Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

// //Route Club
// Route::get('/clubs/create', [ClubController::class, 'create'])->name('clubs.create');
// Route::get('/clubs/index', [ClubController::class, 'index'])->name('clubs.index');
// Route::get('/clubs/edit/{id}', [ClubController::class, 'edit'])->name('clubs.edit');
// Route::delete('/clubs/destroy{id}', [ClubController::class, 'destroy'])->name('clubs.destroy');
// Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
// Route::post('/clubs/store', [ClubController::class, 'store'])->name('clubs.store');
// Route::put('/clubs/{club}', [ClubController::class, 'update'])->name('clubs.update');




//Route Membre

Route::get('/membres/create', [MembreController::class, 'create'])->name('membres.create');
Route::get('/membres/index', [MembreController::class, 'index'])->name('membres.index');
Route::get('/membres/edit/{id}', [MembreController::class, 'edit'])->name('membres.edit');
Route::delete('/membres/destroy{id}', [MembreController::class, 'destroy'])->name('membres.destroy');
Route::get('/membres', [MembreController::class, 'index'])->name('membres.index');
Route::post('/membres/store', [MembreController::class, 'store'])->name('membres.store');
Route::put('/membres/{membre}', [MembreController::class, 'update'])->name('membres.update');


//Route Activite
Route::get('/activites/create', [ActiviteController::class, 'create'])->name('activites.create');
Route::get('/activites/index', [ActiviteController::class, 'index'])->name('activites.index');
Route::get('/activites/edit/{id}', [ActiviteController::class, 'edit'])->name('activites.edit');
Route::delete('/activites/destroy{id}', [ActiviteController::class, 'destroy'])->name('activites.destroy');
Route::get('/activites', [ActiviteController::class, 'index'])->name('activites.index');
Route::post('/activites/store', [ActiviteController::class, 'store'])->name('activites.store');
Route::put('/activites/{activite}', [ActiviteController::class, 'update'])->name('activites.update');                                                                                                                                                 


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
