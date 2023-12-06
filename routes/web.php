<?php

use App\Http\Controllers\ListingsController;
use Illuminate\Support\Facades\Route;

use App\Models\Listings;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

// All listings
Route::get('/', [ListingsController::class, 'index']);

// Single Listing
Route::get('/listing/{listing}', [ListingsController::class, 'show']);
