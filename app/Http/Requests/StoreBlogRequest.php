<?php

// app/Http/Requests/StoreBlogRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBlogRequest extends FormRequest
{
    public function authorize()
    {
        // Return true if you want to allow all users to make this request, or add authorization logic here
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => ['required', Rule::unique('blogs')->ignore($this->blog)],
            'description' => 'required',
            'description2' => 'required',
            'description3' => 'required',
            'description4' => 'required',
            'description5' => 'required',
            'description6' => 'required',
            'image' => 'image|nullable',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}

