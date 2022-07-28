<?php

namespace App\Helpers;

class RequestHelper
{
    public function getResponse(
        bool $status,
        array $errorList,
        string $message = null,
        array $data = null
    ) {
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
    }
}
