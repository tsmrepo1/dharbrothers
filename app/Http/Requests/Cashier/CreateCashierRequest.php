<?php

namespace App\Http\Requests\Cashier;

use Illuminate\Foundation\Http\FormRequest;

class CreateCashierRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'cashier_name' => 'required',
            'contact_no' => 'required|digits:10',
            'email' => 'required|email',
            'address' => 'required',
            'cash_in_hand' => 'required|numeric',
        ];
    }
}
