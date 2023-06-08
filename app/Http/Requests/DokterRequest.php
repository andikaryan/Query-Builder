<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokterRequest extends FormRequest
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
                'nama_dokter' => [
                    'required',
                    'string',
                    'max:200'
                ],
                'spesialis' => [
                    'required',
                    'string',
                    'max:200'
                ],
                'nomor_telepon' => [
                    'required',
                    'string',
                    'max:200'
                ]
        ];
        return $rules;
    }
}
