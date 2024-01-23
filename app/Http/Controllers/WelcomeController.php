<?php

namespace App\Http\Controllers;

use App\Models\RealEstateProduct;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $realEstateProducts = RealEstateProduct::all();

        return view('welcome', compact('realEstateProducts'));
    }
}
