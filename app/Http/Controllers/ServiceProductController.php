<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceProductController extends Controller
{
    public function index()
    {
        $serviceProducts = Service::paginate(20);

        return view('services', compact('serviceProducts'));
    }

    public function welcome()
    {
        $serviceProducts = Service::all();

        return view('welcome', compact('jobsProducts'));
    }

    public function show($id)
    {
        $servicesProduct = Service::findOrFail($id);

        return view('services_details', compact('servicesProduct'));
    }
}
