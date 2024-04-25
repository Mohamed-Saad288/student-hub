<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string','min:3'],
            'phone' => ['required','numeric','digits:11'],
            'college_id' => ['required','numeric','digits:8'],
            'department' => ['required','string'],
            'level' => ['required','numeric']
        ];
    }
    public function messages()
    {
        return [
            'level' => 'level filed is required'
        ];
    }

}
