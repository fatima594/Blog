<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    public function authorize()
    {
        return true; // تأكد من ضبط هذا بناءً على متطلبات الأذونات
    }

    public function rules()
    {
        return [
            'comment' => 'required|string|max:500',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|url',
            'blog_id' => 'required|exists:blogs,id'
        ];
    }
}
