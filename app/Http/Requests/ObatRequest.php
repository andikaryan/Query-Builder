<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'nama' => [
                'required',
                'string',
                'max:200'
            ],
            'kegunaan' => [
                'required',
                'string',
                'max:100'
            ],
            'harga' => [
                'required',
                'integer'
            ]
        ];

        return $rules;
    }
}
