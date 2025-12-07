<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets', ['planets' => $planets]);
    }

    public function show($planet)
    {
        $selectedPlanet = Planet::where('name', ucfirst($planet))->first();
        
        if (!$selectedPlanet) {
            abort(404, 'Planet not found');
        }

        return view('planet-detail', ['planet' => $selectedPlanet]);
    }
}