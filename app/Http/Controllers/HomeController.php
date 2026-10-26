<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $services = [
            [
                'name' => 'Hair Styling',
                'description' => 'Personalized cuts, styling, and professional hair care.',
                'price' => 1500,
                'icon' => 'bi-scissors',
            ],
            [
                'name' => 'Manicure',
                'description' => 'Carefully tailored nail care for a polished finish.',
                'price' => 1000,
                'icon' => 'bi-stars',
            ],
            [
                'name' => 'Facial Treatment',
                'description' => 'Relaxing skincare treatments for a refreshed feel.',
                'price' => 2000,
                'icon' => 'bi-flower1',
            ],
        ];

        return view('home', compact('services'));
    }

    public function about(): View
    {
        return view('about');
    }
}


