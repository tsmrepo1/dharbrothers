<?php

namespace App\Http\Requests\vehicle;

use Illuminate\Foundation\Http\FormRequest;

class CreateVehicleRequest extends FormRequest
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
            'vehicle_no' => 'required',
            'pan' => 'required',
            'owners_name' => 'required|string',
            'contact_no' => 'required|string',
            'bank' => 'required|string',
            'account_no' => 'required|string',
            'branch' => 'required|string',
            'ifsc_code' => 'required',
            'fund_transfer_type' => 'required',
        ];
    }
}
