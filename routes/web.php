<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//Listing Routes Start

//Show All
Route::get('/', [ListingController::class, 'index']);

//Show Create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Upate from edit form
Route::put('/listings/{listing}' , [ListingController::class, 'update'])->middleware('auth');

//Detele Listing
Route::delete('/listings/{listing}' , [ListingController::class, 'destroy'])->middleware('auth');

//Manage Listing
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Show single form
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Listing Route end
//Authentication Routes Start

//Show create/register new user form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create/Register new user
Route::post('/users', [UserController::class, 'store']);

//Log User out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Submit login form
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Authentication Routes End
