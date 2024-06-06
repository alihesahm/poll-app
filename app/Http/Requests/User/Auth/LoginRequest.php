<?php

namespace App\Http\Requests\User\Auth;

use App\Helpers\Traits\General\HasFailedValidationRequest;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'job_number' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }
}
