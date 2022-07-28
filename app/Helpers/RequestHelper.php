<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class RequestHelper
{
    public static function getResponse(
        bool $status,
        array $errorList,
        string $message = null,
        array $data = null
    ): JsonResponse {
        $response = ['status' => $status];

        if ($errorList !== null) {
            $response['errors'] = $errorList;
        }

        if ($message !== null) {
            $response['message'] = $message;
        }

        if ($data !== null) {
            $response['data'] = $data;
        }

        return response()->json($response);
    }
}
