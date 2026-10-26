@extends('layouts.app1')

@section('title', 'About Us | Elegance Salon')

@section('content')

<div class="services-preview">
    <div class="container">

    <div class="section-heading">
        <div>
            <span class="eyebrow">
                <span class="eyebrow-line"></span>
                OUR STORY
            </span>

            <h2>Beauty with a personal touch.</h2>

            <p>
                At Elegance Salon, we believe personal care
                should feel welcoming, thoughtful, and individual.
            </p>
        </div>
    </div>

    <div class="experience-grid">

        <div class="experience-image">
            <img
                src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250?auto=format&fit=crop&w=1000&q=85"
                alt="Beauty salon interior"
                loading="lazy"
            >
        </div>

        <div class="experience-copy">
            <span class="eyebrow">WHO WE ARE</span>

            <h2>A welcoming space for your well-being.</h2>

            <p>
                Elegance Salon brings together professional
                beauty services and a considered, comfortable
                environment.
            </p>

            <p>
                Our goal is to make every appointment feel
                personal, from understanding your preferences
                to helping you choose services that suit your needs.
            </p>

            <p>
                We value attentive service, cleanliness,
                quality products, and lasting relationships
                with our clients.
            </p>

            <a href="{{ route('services.index') }}" class="button button-dark">
                Explore Our Services
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>

</div>

</div>

<div class="booking-banner">
    <div class="container booking-content">
        <div>
            <span class="eyebrow">WE WOULD LOVE TO WELCOME YOU</span>
            <h2>Your time at Elegance awaits.</h2>
            <p>Contact our team to learn more about our services.</p>
        </div>


    <a href="{{ route('contact') }}" class="button button-light">
        Get in Touch
        <i class="bi bi-arrow-up-right"></i>
    </a>
</div>


</div>

@endsection
