<?php

namespace App\Http\Controllers\Api;

use App\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassroomsController extends Controller
{
    public function index()
    {
        return Classroom::all();
    }

    public function store(Request $request)
    {
        $classroom = Classroom::create($request->all());

        return $classroom;
    }

    public function show($id)
    {
        return Classroom::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->update($request->all());

        return $classroom;
    }

    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();

        return '';
    }
}
