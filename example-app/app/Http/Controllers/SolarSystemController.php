<?php

namespace App\Http\Controllers;

use App\Models\SolarSystem;
use Illuminate\Http\Request;

class SolarSystemController extends Controller
{
    public function index()
    {
        $solarSystems = SolarSystem::all();
        return view('solarsystems.index', compact('solarSystems'));
    }

    public function show($id)
    {
        $solarSystem = SolarSystem::with('planets')->findOrFail($id);
        return view('solarsystems.show', compact('solarSystem'));
    }
}