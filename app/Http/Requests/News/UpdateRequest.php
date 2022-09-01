<?php

namespace App\Http\Requests\News;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class UpdateRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    function failedValidation(Validator $validator)
    {
        if ($this->expectsJson()) {
            $response = new Response($validator->errors(), 422);
            throw new ValidationException($validator, $response);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|max:200|regex:/^[0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i",
            "slug" => "min:5|max:200|unique:news,slug,".$this->route("news")->id,
            "subtitle" => "required|min:5|max:200",
            "content" => "required|min:7"
        ];
    }
}
