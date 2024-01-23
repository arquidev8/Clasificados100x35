<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use Illuminate\Http\Request;

class VehiclesProductController extends Controller
{
    public function index()
    {
        $vehiclesProducts = Vehicles::paginate(20);

        return view('vehicles', compact('vehiclesProducts'));
    }

    public function welcome()
    {
         // Obtén el primer producto de la tabla merchandise
         $firstVehiclesProduct = Vehicles::first();

         // Pasa los productos a la vista
         return view('welcome', compact('firstVehiclesProduct'));
    }

    public function show($id)
    {
        $vehiclesProduct = Vehicles::findOrFail($id);

        return view('vehicles_details', compact('vehiclesProduct'));
    }
}
