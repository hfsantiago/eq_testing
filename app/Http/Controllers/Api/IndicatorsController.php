<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Indicator;
use Illuminate\Http\JsonResponse;

class IndicatorsController extends Controller
{
    public function index(): JsonResponse
    {
        $indicators = Indicator::all();
        return response()->json($indicators);
    }

    public function show($id): JsonResponse
    {
        $indicator = Indicator::findOrFail($id);
        return response()->json($indicator);
    }

    public function create(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'expected_value' => 'required|numeric',
            'min_value' => 'required|numeric',
            'max_value' => 'required|numeric',
        ]);

        $indicator = Indicator::create($validatedData);

        return response()->json($indicator, 201);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'expected_value' => 'required|numeric',
            'min_value' => 'required|numeric',
            'max_value' => 'required|numeric',
        ]);

        $indicator = Indicator::findOrFail($id);
        $indicator->update($validatedData);

        return response()->json($indicator);
    }

    public function destroy($id): JsonResponse
    {
        $indicator = Indicator::findOrFail($id);
        $indicator->delete();

        return response()->json(['message' => 'Indicator deleted successfully']);
    }

}
