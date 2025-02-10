<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailMarketingRequest extends FormRequest
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
            'phone' => ['nullable', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
            'email' => ['required', 'email:rfc,dns'],
            'approve_check' => ['required', 'accepted'],
        ];
    }
    public function messages(): array
    {
        return [
            'phone.regex' => __('messages.phone.regex'),
            'phone.min' => __('messages.phone.min'),
            'email.required' => __('messages.email.required'),
            'email.email' => __('messages.email.email'),
            'approve_check.required' => __('messages.approve_check.required'),
            'approve_check.accepted' => __('messages.approve_check.accepted'),
        ];

    }

    public function attributes(): array
    {
        return [
            'name' => __('page.name'),
            'email' => __('page.email'),
            'approve_check' => __('page.approve_text'),
        ];
    }

}
