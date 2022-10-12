<?php

namespace App\Http\Requests\Empleado;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\CustomFormRequest;

class IndexRequest extends CustomFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                //
            ];
    }
}
