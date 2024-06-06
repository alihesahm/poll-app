<?php

namespace App\Http\Requests\Admin\Question;

use App\Helpers\Traits\General\HasFailedValidationRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
{
    use HasFailedValidationRequest;

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
            'title' => ['required', 'string', 'max:255'],
            'allowed_answers' => ['required', 'integer'],
            'options' => ['required', 'array', 'min:1'],
            'options.*.title' => ['required', 'string', 'max:255'],
        ];
    }
}
