<?php

namespace App\Http\Controllers\Api;

use App\Building;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuildingsController extends Controller
{
    public function index()
    {
        return response()->json(Building::all());
    }

    public function store(Request $request)
    {
        $building = Building::create($request->all());

        return $building;
    }

    public function show($id)
    {
        return Building::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $building = Building::findOrFail($id);
        $building->update($request->all());

        return $building;
    }

    public function destroy($id)
    {
        $building = Building::findOrFail($id);
        $building->delete();

        return '';
    }
}
