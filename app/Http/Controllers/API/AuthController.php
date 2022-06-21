<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => 'Registration completed successfully'
        ]);
    }
}
