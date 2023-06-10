<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasienRequest extends FormRequest
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
            'nama_pasien' => [
                'required',
                'string',
                'max:200'
            ],
            'tanggal_lahir' => [
                'required',
                'date',
            ],
            'tanggal_opname' => [
                'required',
                'date',
            ],
            'asal' => [
                'required',
                'string',
                'max:200'
            ],
            'penyakit' => [
                'required',
                'string',
                'max:200'
            ],
            'dokter_id' => [
                'required',
                'integer',
            ],
            'ruangan_id' => [
                'required',
                'integer',
            ]
        ];

        return $rules;
    }
}
