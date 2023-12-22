<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\RateLimiter;

class LoginRequest extends FormRequest
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
        $maxAttempts = 3;
        $decayMinutes = 1;

        // Apply rate limiting validation rule
        $this->ensureUserIsNotRateLimited($maxAttempts, $decayMinutes);

        return [
            'introducer_key' => 'required|string',
            'password' => 'required|string',
        ];
    }

    /**
     * Verify add validation error as per details
     * @param string $maxAttempts
     * @param string $decayMinutes
     * @return ValidationException if rate limit is over
     */
    protected function ensureUserIsNotRateLimited($maxAttempts, $decayMinutes)
    {
        $introducerKey = $this->input('introducer_key');

        if (RateLimiter::tooManyAttempts($introducerKey, $maxAttempts, $decayMinutes)) {
            $this->validator->errors()->add('rate_limit', 'Too many login attempts. Please try again later.');

            // Handle the response when the user has exceeded the rate limit
            throw \Illuminate\Validation\ValidationException::withMessages($this->validator->errors()->toArray());
        }
    }
}
