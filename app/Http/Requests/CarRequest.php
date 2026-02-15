<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CarRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:100',
                Rule::unique('cars', 'name')->ignore($this->route('car')),
            ],
            'is_registered' => 'boolean',
            'registration_number' => [
                'required_if:is_registered,true',
                'nullable',
                'string',
                'size:8',
                Rule::unique('cars', 'registration_number')->ignore($this->route('car')),
            ],
        ];
    }
}