<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FeedbackController extends Controller
{
    public function index(): View
    {
        return view('feedback');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'service' => [
                'nullable',
                'in:Hair Styling,Manicure,Pedicure,Facial Treatment,Hair Treatment,Bridal Styling,Other',
            ],
            'rating' => ['required', 'integer', 'between:1,5'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        Feedback::create($validated);

        return redirect()
            ->route('feedback.index')
            ->with('success', 'Thank you for sharing your experience with Elegance Salon. We appreciate your feedback.');
    }
}

