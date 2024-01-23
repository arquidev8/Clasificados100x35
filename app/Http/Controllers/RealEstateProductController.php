<?php

namespace App\Http\Controllers;

use App\Models\RealEstateProduct;
use Illuminate\Http\Request;

class RealEstateProductController extends Controller
{
    public function index()
    {
        $realEstateProducts = RealEstateProduct::paginate(20);

        return view('real_estate', compact('realEstateProducts'));
    }

    public function welcome()
    {
        $realEstateProducts = RealEstateProduct::all();

        return view('welcome', compact('realEstateProducts'));
    }

    public function show($id)
    {
        $product = RealEstateProduct::findOrFail($id);

        return view('real_estate_details', compact('product'));
    }
}
