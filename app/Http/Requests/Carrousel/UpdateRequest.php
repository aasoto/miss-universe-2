<?php

namespace App\Http\Requests\Carrousel;

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
            'current_image' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:10240',
            'title' => 'nullable|string|min:10|max:500',
            'subtitle' => 'nullable|string|min:10|max:700',
            'current_secondary_image' => 'nullable|string',
            'secondary_image' => 'nullable|image|mimes:jpeg,jpg,png|max:10240',
            'button_1_text' => 'nullable|string|max:50',
            'button_1_type' => 'nullable|string|max:100',
            'button_1_color' => 'nullable|string|max:2000',
            'button_1_link' => 'nullable|string|max:2000',
            'button_2_text' => 'nullable|string|max:50',
            'button_2_type' => 'nullable|string|max:100',
            'button_2_color' => 'nullable|string|max:2000',
            'button_2_link' => 'nullable|string|max:2000'
        ];
    }
}
