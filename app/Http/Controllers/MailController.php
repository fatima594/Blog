<?php
// app/Http/Controllers/MailController.php
// app/Http/Controllers/MailController.php

namespace App\Http\Controllers;

use App\Mail\CommentNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\Comment;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {
            // Log request data to verify incoming data
            Log::info('Request data:', $request->all());

            $commentData = $request->validate([
                'comment' => 'required|string',
                'name' => 'required|string',
                'email' => 'required|email',
                'website' => 'nullable|url',
                'blog_id' => 'required|exists:blogs,id',
            ]);

            // Log the validated data
            Log::info('Validated data:', $commentData);

            $comment = Comment::create($commentData);

            Mail::to('fatima@gmail.com')->send(new CommentNotification($comment));

            // Redirect to the blog page with a success message
            return redirect('/blog')->with('success', 'Comment submitted successfully and email sent.');

        } catch (Exception $e) {
            Log::error('Error sending email:', ['exception' => $e]);

            // Redirect with an error message if email sending fails
            return redirect('/blog')->with('error', 'Failed to send email. ' . $e->getMessage());
        }
    }
}
