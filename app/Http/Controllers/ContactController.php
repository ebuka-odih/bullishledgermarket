<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $contact = ContactMessage::create($validated);

        // Send mail to admin
        Mail::to('admin@bullishledgermarket.com')->send(new ContactFormMail($contact));

        return back()->with('success', 'Your message has been sent successfully!');
    }
} 