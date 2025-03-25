<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'price'=> 'required|numeric',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:1',
            'author' => 'nullable|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'specified_age' => 'nullable|string|max:10',
            'language' => 'nullable|string|max:50',
            'year_of_publication' => 'nullable|integer|min:1900|max:' . date('Y'),
            'page_number' => 'nullable|integer|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
