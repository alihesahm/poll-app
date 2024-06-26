<?php

namespace App\Http\Requests\Admin\User;

use App\Helpers\Traits\General\HasFailedValidationRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'job_number' => ['required', 'string', 'digits_between:4,20', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
}
