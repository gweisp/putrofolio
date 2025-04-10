<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message; // Pastikan untuk mengimpor model Message
class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Message::create($request->only('name', 'email', 'message'));

        return back()->with('success', 'Pesan kamu berhasil dikirim!');
    }

    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Store in database (if using a model)
        Message::create($validated);

        // Or send email (if that's your purpose)
        // Mail::to('your@email.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you for your message!');
    }
}
