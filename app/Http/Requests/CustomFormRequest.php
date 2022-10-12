<?php

namespace App\Http\Requests;
use App\Exceptions\JsonAuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

class CustomFormRequest extends FormRequest
{
    /**
     * Handle a failed authorization attempt.
     *
     * @return void
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    protected function failedAuthorization()
    {
        throw new JsonAuthorizationException();
    }
}
