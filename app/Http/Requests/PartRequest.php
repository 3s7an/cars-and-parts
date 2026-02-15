<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PartRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:100',
            'serial_number' => [
                'required',
                'string',
                'size:8',
                Rule::unique('parts', 'serial_number')->ignore($this->route('part')),
            ],
            'car_id' => 'required|integer|exists:cars,id',
        ];
    }
}
