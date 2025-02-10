<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
            'email' => ['required', 'email:rfc,dns'],
            'product_code' => ['required', 'exists:products,code'],
            'note' => ['nullable', 'string', 'max:1000'],
            'approve_check' => ['required', 'accepted'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => __('messages.name.required'),
            'name.max' => __('messages.name.max'),
            'phone.required' => __('messages.phone.required'),
            'phone.regex' => __('messages.phone.regex'),
            'phone.min' => __('messages.phone.min'),
            'email.required' => __('messages.email.required'),
            'email.email' => __('messages.email.email'),
            'product_code.required' => __('messages.product_code.required'),
            'product_code.exists' => __('messages.product_code.exists'),
            'note.max' => __('messages.note.max'),
            'approve_check.required' => __('messages.approve_check.required'),
            'approve_check.accepted' => __('messages.approve_check.accepted'),
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {

        return [
            'name' => __('page.name'),
            'phone' => __('page.phone'),
            'email' => __('page.email'),
            'product_code' => __('page.product-name'),
            'note' => __('page.note'),
            'approve_check' => __('page.approve_text'),
        ];
    }
}
