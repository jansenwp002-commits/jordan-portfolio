<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:5000',
        ]);

        Mail::raw(
            "New portfolio contact!\n\n" .
            "From: {$validated['name']}\n" .
            "Email: {$validated['email']}\n" .
            "Subject: {$validated['subject']}\n\n" .
            "Message:\n{$validated['message']}",
            function ($mail) use ($validated) {
                $mail->to('jansenwp002@gmail.com')
                     ->from('jansenwp002@gmail.com', 'Jordan Portfolio')
                     ->replyTo($validated['email'], $validated['name'])
                     ->subject('Portfolio Contact: ' . ($validated['subject'] ?? 'New Message'));
            }
        );

        return response()->json(['success' => true]);
    }
}