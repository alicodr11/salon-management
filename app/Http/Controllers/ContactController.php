<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:25'],
            'subject' => [
                'required',
                'in:General Inquiry,Services and Prices,Appointment Inquiry,Other',
            ],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        ContactMessage::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you for contacting Elegance Salon. Your message has been received.');
    }
}
