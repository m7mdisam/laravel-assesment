<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    public function index()
    {
        return response()->json(Franchise::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            
        ]);

        $created = Franchise::create($data);
        return response()->json($created, 201);
    }

    public function show($id)
    {
        return response()->json(Franchise::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $model = Franchise::findOrFail($id);
        $model->update($request->all());
        return response()->json($model);
    }

    public function destroy($id)
    {
        Franchise::destroy($id);
        return response()->json(['message' => 'Franchise deleted']);
    }
}
