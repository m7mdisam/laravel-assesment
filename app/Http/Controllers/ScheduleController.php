<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return response()->json(Schedule::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'franchise_id' => 'required|exists:franchises,id',
        ]);

        $created = Schedule::create($data);
        return response()->json($created, 201);
    }

    public function show($id)
    {
        return response()->json(Schedule::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $model = Schedule::findOrFail($id);
        $model->update($request->all());
        return response()->json($model);
    }

    public function destroy($id)
    {
        Schedule::destroy($id);
        return response()->json(['message' => 'Schedule deleted']);
    }
}
