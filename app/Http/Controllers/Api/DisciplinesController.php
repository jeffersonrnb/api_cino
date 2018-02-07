<?php

namespace App\Http\Controllers\Api;

use App\Discipline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DisciplinesController extends Controller
{
    public function index()
    {
        return Discipline::all();
    }

    public function store(Request $request)
    {
        $discipline = Discipline::create($request->all());

        return $discipline;
    }

    public function show($id)
    {
        return Discipline::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $discipline = Discipline::findOrFail($id);
        $discipline->update($request->all());

        return $discipline;
    }

    public function destroy($id)
    {
        $discipline = Discipline::findOrFail($id);
        $discipline->delete();

        return '';
    }
}
