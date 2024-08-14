<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentNotification;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        // البيانات تم التحقق منها مسبقًا في StoreCommentRequest
        // يمكننا الآن إنشاء تعليق جديد

        $comment = Comment::create($request->validated());

        // إرسال إشعار عبر البريد الإلكتروني (اختياري)
         Mail::to('admin@example.com')->send(new CommentNotification($comment));

        return redirect()->back()->with('success', 'Your comment has been added successfully!');
    }
}
