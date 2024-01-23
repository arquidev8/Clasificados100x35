<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsProductController extends Controller
{
    public function index()
    {
        $jobsProducts = Job::paginate(20);

        return view('jobs', compact('jobsProducts'));
    }

    public function welcome()
    {
        $jobsProducts = Job::all();

        return view('welcome', compact('jobsProducts'));
    }

    public function show($id)
    {
        $jobsProduct = Job::findOrFail($id);

        return view('jobs_details', compact('jobsProduct'));
    }
}
