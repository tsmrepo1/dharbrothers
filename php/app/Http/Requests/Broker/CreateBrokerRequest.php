<?php

namespace App\Http\Requests\Broker;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrokerRequest extends FormRequest
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
            'broker_name' => 'required',
            'contact_no' => 'required|digits:10',
            'email' => 'required|email|unique:brokers',
            'contact_person' => 'required',
            'bank' => 'required|string',
            'address' => 'required',
            'commission_payment_type' => 'required',
            'gst_no' => 'required',
            'pan' => 'required',
            'bank' => 'required',
            'branch' => 'required',
            'account_no' => 'required|numeric',
            'ifsc_code' => 'required',
        ];
    }
}
