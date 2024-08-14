<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessage;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // عرض نموذج الاتصال
    public function index()
    {
        return view('layouts.pages.contact');
    }

    // تخزين رسالة الاتصال
    public function store(ContactFormRequest $request)
    {
        // لا حاجة لتكرار التحقق من الصحة هنا
        // لأنه يتم التحقق من الصحة في ContactFormRequest

        Contact::create($request->all());

        // إرسال إشعار عبر البريد الإلكتروني (إذا لزم الأمر)
        // Mail::to('admin@example.com')->send(new ContactMessage($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
