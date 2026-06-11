<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Test;
use App\Http\Requests\StoreTestRequest;
use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Test::all());
    }

    public function show($id): JsonResponse
    {
        $test = Test::find($id);

        if (!$test) {
            return response()->json(['message' => 'Test not found'], 404);
        }

        return response()->json($test);
    }

    public function store(StoreTestRequest $request): JsonResponse
    {
        $test = Test::create($request->validated());

        return response()->json($test, 201);
    }

    public function update(StoreTestRequest $request, $id): JsonResponse
    {
        $test = Test::find($id);

        if (!$test) {
            return response()->json(['message' => 'Test not found'], 404);
        }

        $test->update($request->validated());

        return response()->json($test);
    }

    public function destroy($id): JsonResponse
    {
        $test = Test::find($id);

        if (!$test) {
            return response()->json(['message' => 'Test not found'], 404);
        }

        $test->delete();

        return response()->json(['message' => 'Test deleted']);
    }
}