<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendSmsRequest extends FormRequest
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
            'api_key' => 'required',
            'api_secret' => 'required',
            'sender'   => 'required',
            'phone' => 'required|numeric|digits:11',
            'message'  => 'required',
        ];
    }
}
