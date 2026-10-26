<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = [
            [
                'name' => 'Hair Styling',
                'description' => 'Professional haircuts, styling, and personalized hair care.',
                'price' => 1500,
                'category' => 'Hair Care',
            ],
            [
                'name' => 'Manicure',
                'description' => 'A refreshing nail care experience with attention to detail.',
                'price' => 1000,
                'category' => 'Nail Care',
            ],
            [
                'name' => 'Pedicure',
                'description' => 'Comforting foot care and a polished finish.',
                'price' => 1200,
                'category' => 'Nail Care',
            ],
            [
                'name' => 'Facial Treatment',
                'description' => 'Personalized skincare treatments for a refreshed appearance.',
                'price' => 2000,
                'category' => 'Skincare',
            ],
            [
                'name' => 'Hair Treatment',
                'description' => 'Professional conditioning and restorative hair care.',
                'price' => 2500,
                'category' => 'Hair Care',
            ],
            [
                'name' => 'Bridal Styling',
                'description' => 'Carefully planned styling for weddings and special occasions.',
                'price' => 8000,
                'category' => 'Special Occasions',
            ],
        ];

        return view('services', compact('services'));
    }
}