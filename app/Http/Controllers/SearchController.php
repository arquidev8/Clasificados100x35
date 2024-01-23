<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Merchandise;
use App\Models\Vehicle;
use App\Models\RealEstate;
use Illuminate\Http\Request;

use App\Models\RealEstateProduct;
use App\Models\Service;
use App\Models\Vehicles;

class SearchController extends Controller
{
    public function index(Request $request)
{
    // $query = $request->input('query');

    // $jobs = Job::where(function ($queryBuilder) use ($query) {
    //     foreach (explode(' ', $query) as $word) {
    //         $queryBuilder->orWhere('title', 'like', "%{$word}%");
    //     }
    // })->get();
    
    // $vehicles = Vehicles::where(function ($queryBuilder) use ($query) {
    //     foreach (explode(' ', $query) as $word) {
    //         $queryBuilder->orWhere('title', 'like', "%{$word}%");
    //     }
    // })->get();

    $query = $request->input('query');
    $location = $request->input('location');

    $words = explode(' ', $query);

    // $jobs = Job::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')->get();
    // $vehicles = Vehicles::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')->get();
    // $merchandise = Merchandise::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')->get();
    // $realEstate = RealEstateProduct::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')->get();
    // $service = Service::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')->get();



//     $jobs = Job::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')
//             ->where('province', $location)
//             ->get();
//     $vehicles = Vehicles::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')
//             ->where('province', $location)
//             ->get();
//     $service= Service::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')
//             ->where('province', $location)
//             ->get();
//     $merchandise= Merchandise::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')
//             ->where('province', $location)
//             ->get();
//     $vehicles= Vehicles::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')
//             ->where('province', $location)
//             ->get();
//     $realEstate= Vehicles::whereRaw('title LIKE ?', '%' . implode('%', $words) . '%')
//             ->where('province', $location)
//             ->get();

    
$jobs = Job::where(function ($queryBuilder) use ($words, $location, $query) {
        if ($query) {
            $queryBuilder->where(function ($titleBuilder) use ($words) {
                foreach ($words as $word) {
                    $titleBuilder->orWhere('title', 'like', "%{$word}%");
                }
            });
        }

        if ($location) {
            $queryBuilder->orWhere('province', $location);
        }

        if (!$query && !$location) {
            // Si no se proporciona ni el título ni la provincia, devolver todos los resultados.
            $queryBuilder->orWhereNotNull('id');
        }
    })->get();

    $vehicles = Vehicles::where(function ($queryBuilder) use ($words, $location, $query) {
        if ($query) {
            $queryBuilder->where(function ($titleBuilder) use ($words) {
                foreach ($words as $word) {
                    $titleBuilder->orWhere('title', 'like', "%{$word}%");
                }
            });
        }

        if ($location) {
            $queryBuilder->orWhere('province', $location);
        }

        if (!$query && !$location) {
            $queryBuilder->orWhereNotNull('id');
        }
    })->get();

    $merchandise = Merchandise::where(function ($queryBuilder) use ($words, $location, $query) {
        if ($query) {
            $queryBuilder->where(function ($titleBuilder) use ($words) {
                foreach ($words as $word) {
                    $titleBuilder->orWhere('title', 'like', "%{$word}%");
                }
            });
        }

        if ($location) {
            $queryBuilder->orWhere('province', $location);
        }

        if (!$query && !$location) {
            $queryBuilder->orWhereNotNull('id');
        }
    })->get();

    $realEstate = RealEstateProduct::where(function ($queryBuilder) use ($words, $location, $query) {
        if ($query) {
            $queryBuilder->where(function ($titleBuilder) use ($words) {
                foreach ($words as $word) {
                    $titleBuilder->orWhere('title', 'like', "%{$word}%");
                }
            });
        }

        if ($location) {
            $queryBuilder->orWhere('province', $location);
        }

        if (!$query && !$location) {
            $queryBuilder->orWhereNotNull('id');
        }
    })->get();

    $service = Service::where(function ($queryBuilder) use ($words, $location, $query) {
        if ($query) {
            $queryBuilder->where(function ($titleBuilder) use ($words) {
                foreach ($words as $word) {
                    $titleBuilder->orWhere('title', 'like', "%{$word}%");
                }
            });
        }

        if ($location) {
            $queryBuilder->orWhere('province', $location);
        }

        if (!$query && !$location) {
            $queryBuilder->orWhereNotNull('id');
        }
    })->get();

   
    // Repite el mismo proceso para otras categorías...

    $results = [
        'jobs' => $jobs,
        'vehicles' => $vehicles,
        'merchandise' => $merchandise,
        'realEstate' => $realEstate,
        'service' => $service,
        // Otros resultados...
    ];

    return view('results', compact('results'));
}

}
