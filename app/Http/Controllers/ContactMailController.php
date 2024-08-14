<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    public function sendcontact(Request $request)
    {
        try {
            // Log request data to verify incoming data
            Log::info('Request data:', $request->all());

            $contact = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ]);

            // Log the validated data
            Log::info('Validated data:', $contact);

            $contact = Contact::create($contact);

            Mail::to('hassan@gmail.com')->send(new ContactNotification($contact));

            // Redirect to the contact page with a success message
            return redirect('/contact')->with('success', 'User submitted successfully and email sent.');

        } catch (Exception $e) {
            Log::error('Error sending email:', ['exception' => $e]);

            // Redirect with an error message if email sending fails
            return redirect('/contact')->with('error', 'Failed to send email. ' . $e->getMessage());
        }
    }
}

