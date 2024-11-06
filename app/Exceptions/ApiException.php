<?php

namespace App\Exceptions;

use Illuminate\Http\Exceptions\HttpResponseException;

class ApiException extends HttpResponseException
{
    public function __construct(int $code = 500, string $message = null, $errors = []) {
        $response = ['code' => $code];
        if ($message) $response['message'] = $message;
        if ($errors)  $response['errors']  = $errors;
        parent::__construct(response($response, $code));
    }
}
