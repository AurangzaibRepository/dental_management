<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Dentist;
use App\Models\Techician;

class AuthController extends Controller
{
    public function __construct(
        private Dentist $dentist,
        private Technician $technician
    ) {
    }

    public function register(RegisterRequest $request): JsonResponse
    {
        if ($request->role === 'Dentist') {
            $this->dentist->register($request);
        }

        if ($request->role === 'Technician') {
            $this->$technician->register($request);
        }

        return response()->json([
            'status' => true,
            'message' => 'Registration completed successfully'
        ]);
    }
}
