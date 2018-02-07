<?php

namespace App\Http\Controllers\Api;

use App\Class;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClassesController extends Controller
{
    public function index()
    {
        return Class::all();
    }

    public function store(Request $request)
    {
        $class = Class::create($request->all());

        return $class;
    }

    public function show($id)
    {
        return Class::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $class = Class::findOrFail($id);
        $class->update($request->all());

        return $class;
    }

    public function destroy($id)
    {
        $class = Class::findOrFail($id);
        $class->delete();

        return '';
    }
}
