<?php

namespace App\Http\Controllers\Api;

use App\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonsController extends Controller
{
    public function index()
    {
        return Lesson::all();
    }

    public function store(Request $request)
    {
        $lesson = Lesson::create($request->all());

        return $lesson;
    }

    public function show($id)
    {
        return Lesson::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->update($request->all());

        return $lesson;
    }

    public function destroy($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();

        return '';
    }
}
