<?php

namespace App\Http\Controllers\Api;

use App\Hour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HoursController extends Controller
{
    public function index()
    {
        return Hour::all();
    }

    public function store(Request $request)
    {
        $hour = Hour::create($request->all());

        return $hour;
    }

    public function show($id)
    {
        return Hour::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $hour = Hour::findOrFail($id);
        $hour->update($request->all());

        return $hour;
    }

    public function destroy($id)
    {
        $hour = Hour::findOrFail($id);
        $hour->delete();

        return '';
    }
}
