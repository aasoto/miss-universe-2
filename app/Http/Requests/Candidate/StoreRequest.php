<?php

namespace App\Http\Requests\Candidate;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class StoreRequest extends FormRequest
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
            'country_id' => 'required|integer',
            'first_name' => 'required|max:100|string',
            'second_name' => 'nullable|string|max:100',
            'first_last_name' => 'required|max:100|string',
            'second_last_name' => 'nullable|string|max:100',
            'gender' => 'required',
            'birthdate' => 'required|date',
            'national_committee_id' => 'required|integer',
            'official_picture' => 'required|image|mimes:jpeg,jpg,png|max:10240'
        ];
    }
}
