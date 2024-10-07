<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'category' => 'required|string',
            'title' => 'required|string|max:255',
            'summary' => 'required|string|max:100',
            'description' => 'required|string',
            'location' => 'required|string',
            'amount' => 'required|numeric',
            'sqm' => 'required|numeric',
            // 'photos' => 'required', // Required field for multiple files
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
