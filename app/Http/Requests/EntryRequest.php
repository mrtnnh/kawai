<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string','max:20'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tell' =>['required','regex:/^0[0-9]{9,10}$/'],
            'message' =>['required','string','max:1000'],
        ];
    }
}
