<?php

namespace App\Http\Requests\User\Answers;

use App\Helpers\Traits\General\HasFailedValidationRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreAnswerRequest extends FormRequest
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
            'options' => ['required', 'array', 'min:1', 'max:' . (request()->question->allowed_answers)],
            'options.*' => [
                'integer',
                Rule::exists('options', 'id')
                    ->where('question_id', request()->question->id)
            ],
        ];
    }
}
