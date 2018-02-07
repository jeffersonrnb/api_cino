<?php

namespace App\Http\Controllers\Api;

use App\Equipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EquipmentController extends Controller
{
    public function index()
    {
        return Equipment::all();
    }

    public function store(Request $request)
    {
        $equipment = Equipment::create($request->all());

        return $equipment;
    }

    public function show($id)
    {
        return Equipment::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $equipment = Equipment::findOrFail($id);
        $equipment->update($request->all());

        return $equipment;
    }

    public function destroy($id)
    {
        $equipment = Equipment::findOrFail($id);
        $equipment->delete();

        return '';
    }
}
