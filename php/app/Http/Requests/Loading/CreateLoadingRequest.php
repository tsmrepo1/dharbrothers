<?php

namespace App\Http\Requests\Loading;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CreateLoadingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|string>
     */
    public function rules(): array
    {
        // return [];
        return [
            "broker_id.*"               => "required",
            "vehicle_id.*"              => "required",
            "product_id.*"              => "required",
            "client_id.*"               => "required",
            "fuel_station_id.*"         => "required",
            "cashier_id.*"              => "required",
            "date.*"                    => "required",
            "challan_no.*"              => 'required',
            "qty.*"                     => "required|numeric",
            "unit.*"                    => "required|numeric",
            "unloading_point.*"         => "required",
            "fuel_amount.*"             => "required|numeric",
            "cash_amount.*"             => "required|numeric",
            "bank_advance.*"            => "required|numeric",
            "dock_loading_charges.*"    => "required|numeric",
            "driver_commission.*"       => "required|numeric",
            "broker_commission.*"       => "required|numeric",
        ];
    }
}
