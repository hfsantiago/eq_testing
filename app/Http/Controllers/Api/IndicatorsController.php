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
}
