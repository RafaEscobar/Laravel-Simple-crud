<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|string',
            'published_year' => 'required|integer',
            'author_id' => 'required|exists:authors,id',
            'cover' => 'required'
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
