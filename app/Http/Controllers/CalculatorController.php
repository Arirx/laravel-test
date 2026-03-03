<?php

namespace App\Http\Controllers;

use App\Services\CalculatorService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CalculatorController extends Controller
{
    public function __construct(private CalculatorService $service)
    {
        //
    }
    public function calculate(Request $request): JsonResponse
    {
        $request->validate([
            'operation' => 'required|in:add,multiply',
            'a' => 'required|integer',
            'b' => 'required|integer'
        ]);

        $result = match ($request->operation) {
            'add' => $this->service->add($request->a, $request->b),
            'multiply' => $this->service->add($request->a, $request->b)
        };

        return response()->json(['result' => $result]);
    }
}
