<?php

namespace App\Http\Controllers;
use App\Service\Geolocation\Geolocation;
use App\Service\Satellite\Satellite;
use Illuminate\Http\Request;
use App\Providers\GeolocationServiceProvider;
use App\Service\Map\Map;

class IndexController extends Controller
{
    public function index(Request $request)
    {   
        if ($request->id == 1) {
            return view('index',['arr' => 123]);   
        } else {
            return view('index-2',['arr' => 123]);
        }
    }
}
