<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionStoreRequest extends FormRequest
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
            'content' => ['required', 'string', 'max:255'],
            'a' => ['required', 'string', 'max:255'],
            'b' => ['required', 'string', 'max:255'],
            'c' => ['required', 'string', 'max:255'],
            'd' => ['required', 'string', 'max:255'],
            'field_id' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string', 'max:255'],
        ];
    }
}
