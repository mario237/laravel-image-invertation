<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'chosen_image' => ['required' , 'image' , 'mimes:png,jpg,jpeg,svg' , 'max:5000']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
