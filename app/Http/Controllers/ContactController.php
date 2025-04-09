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
}
