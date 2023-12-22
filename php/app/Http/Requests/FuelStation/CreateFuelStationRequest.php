<?php

namespace App\Http\Requests\FuelStation;

use Illuminate\Foundation\Http\FormRequest;

class CreateFuelStationRequest extends FormRequest
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
            'fuel_station_name' => 'required',
            'email' => 'required|email|unique:fuel_stations',
            'contact_no' => 'required|digits:10',
            'address' => 'required',
            'opening_balance' => 'required',
            'gst_no' => 'required',
            'pan' => 'required',
            'bank' => 'required',
            'branch' => 'required',
            'account_no' => 'required|numeric',
            'ifsc_code' => 'required',
            
        ];
    }
}
