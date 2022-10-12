<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class JsonValidationException extends Exception
{
    protected $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function report()
    {
        return false;
    }

    public function render($request)
    {
        return response()->json(
            [
                'message' => 'Error de validacion',
                'error' => $this->validator->errors(),
            ],
            422
        );
    }
}
