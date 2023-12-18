<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class CreateClientRequest extends FormRequest
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
            'client_name' => 'required',
            'email' => 'required',
            'contact_person' => 'required|string',
            'contact_no' => 'required|digits:10',
            'address' => 'required|string',
            'opening_balance' => 'required|numeric',
            'gst_no' => 'required|string',
            'pan' => 'required',
        ];
    }
}
