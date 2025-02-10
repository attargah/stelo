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
            'name.required' => 'Ad Soyad alanı zorunludur.',
            'name.max' => 'Ad Soyad alanı en fazla 255 karakter olabilir.',
            'phone.required' => 'Telefon alanı zorunludur.',
            'phone.regex' => 'Geçerli bir telefon numarası giriniz.',
            'phone.min' => 'Telefon numarası en az 10 karakter olmalıdır.',
            'email.required' => 'E-posta alanı zorunludur.',
            'email.email' => 'Geçerli bir e-posta adresi giriniz.',
            'product_code.required' => 'Ürün kodu zorunludur.',
            'product_code.exists' => 'Geçersiz ürün kodu.',
            'note.max' => 'Not alanı en fazla 1000 karakter olabilir.',
            'approve_check.required' => 'Aydınlatma metnini kabul etmelisiniz.',
            'approve_check.accepted' => 'Aydınlatma metnini kabul etmelisiniz.',
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
            'name' => 'Ad Soyad',
            'phone' => 'Telefon',
            'email' => 'E-posta',
            'product_code' => 'Ürün Kodu',
            'note' => 'Not',
            'approve_check' => 'Aydınlatma Metni',
        ];
    }
}
