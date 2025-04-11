<?php

namespace App\Http\Controllers;

use App\Models\ParentModel;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        return response()->json(ParentModel::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'franchise_id' => 'required|exists:franchises,id',
        ]);

        $created = ParentModel::create($data);
        return response()->json($created, 201);
    }

    public function show($id)
    {
        return response()->json(ParentModel::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $model = ParentModel::findOrFail($id);
        $model->update($request->all());
        return response()->json($model);
    }

    public function destroy($id)
    {
        ParentModel::destroy($id);
        return response()->json(['message' => 'ParentModel deleted']);
    }
}
