<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Merchandise;
use App\Models\RealEstateProduct;
use App\Models\Service;
use App\Models\Vehicles;
use Illuminate\Http\Request;

class MerchandisesProductController extends Controller
{
    public function index()
    {
        $merchandiseProducts = Merchandise::paginate(20);

        return view('merchandise', compact('merchandiseProducts'));
    }

    public function welcome()
    {
         // Obtén el primer producto de la tabla merchandise
         $firstMerchandiseProduct = Merchandise::first();
         $vehicles = Vehicles::first();
         $jobs = Job::first();
         $realEstate = RealEstateProduct::first();
         $services = Service::first();

         // Pasa los productos a la vista
         return view('welcome', compact('firstMerchandiseProduct', 'vehicles', 'jobs', 'services', 'realEstate'));
    }

    public function show($id)
    {
        $merchandiseProduct = Merchandise::findOrFail($id);

        return view('merchandise_details', compact('merchandiseProduct'));
    }
}
