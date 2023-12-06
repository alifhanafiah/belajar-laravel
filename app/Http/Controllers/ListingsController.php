<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    // All listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listings::all()
        ]);
    }

    // Single Listing
    public function show(Listings $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
