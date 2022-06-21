<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function register(RegisterRequest $registerRequest): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => 'Registration completed successfully'
        ]);
    }
}
