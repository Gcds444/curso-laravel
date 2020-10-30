<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroTapiaRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'titulo' => 'required',            
            'autor' => 'nullable',
            'isbn' => ['required', 'integer']
        ];

        if ($this->method() == 'PATCH' || $this->method() == 'PUT') {
            array_push($rules['isbn'], 'unique:livro_tapias,isbn, ' . $this->livrostapium->id);
            array_push($rules['isbn'], 'unique:livros,isbn,' .$this->livrostapium->id);
        } else {
            array_push($rules['isbn'], 'unique:livro_tapias,isbn');
        }
        return $rules;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'isbn' => preg_replace('/[^0-9]/', '', $this->isbn),
        ]);
    }

    public function messages()
{
    return [
        'isbn.required' => 'Os dados de ISBN deve ser numérico',
    ];
}
}
