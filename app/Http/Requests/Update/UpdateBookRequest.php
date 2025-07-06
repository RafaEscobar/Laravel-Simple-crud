<?php

namespace App\Http\Requests\Update;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'title' => 'sometimes|required|string',
            'published_year' => 'sometimes|required|integer',
            'author_id' => 'sometimes|required|exists:authors,id',
            'cover' => 'sometimes|required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Campo requerido',
            'title.string' => 'Formato incorrecto',
            'published_year.required' => 'Campo requerido',
            'published_year.integer' => 'Formato incorrecto',
            'author_id.required' => 'Campo requerido',
            'author_id.exists' => 'No existe tal autor',
            'cover.required' => 'La imagen es obligatoria',
        ];
    }
}
