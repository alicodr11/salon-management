@extends('layouts.app1')

@section('title', 'Elegance Salon | Beauty & Wellness')

@section('content')

<div class="announcement-bar">
    <p>YOUR TIME. YOUR BEAUTY. YOUR MOMENT.</p>
</div>

<div class="intro-banner">
    <div class="container intro-grid">


    <div class="intro-copy">
        <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WELCOME TO ELEGANCE
        </span>

        <h1>Beauty in every detail. <em>Confidence in every moment.</em></h1>

        <p class="intro-description">
            Discover a more personal approach to beauty.
            From thoughtful hair styling to relaxing skincare,
            every visit is designed around you.
        </p>

        <div class="intro-actions">
            <a href="{{ route('services.index') }}" class="button button-dark">
                Explore Our Services
                <i class="bi bi-arrow-right"></i>
            </a>

            <a href="{{ route('about') }}" class="text-link">
                Discover Our Story
            </a>
        </div>

        <div class="intro-note">
            <i class="bi bi-stars"></i>
            <span>Personal care. Timeless elegance. A welcoming experience.</span>
        </div>
    </div>

    <div class="intro-visual">
        <div class="image-frame">
            <img
                src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=1100&q=85"
                alt="Elegant salon interior with professional styling stations"
            >
        </div>

        <div class="visual-caption">
            <span class="caption-number">01</span>

            <div>
                <strong>A moment for yourself</strong>
                <p>Beauty begins with care.</p>
            </div>
        </div>

        <div class="decorative-circle" aria-hidden="true">E</div>
    </div>

</div>


</div>

<div class="trust-strip">
    <div class="container trust-grid">
        <div>
            <i class="bi bi-flower1"></i>
            <span>Personalized Care</span>
        </div>


    <div>
        <i class="bi bi-gem"></i>
        <span>Quality Products</span>
    </div>

    <div>
        <i class="bi bi-heart"></i>
        <span>Relaxing Experience</span>
    </div>

    <div>
        <i class="bi bi-calendar-check"></i>
        <span>Convenient Appointments</span>
    </div>
</div>


</div>

<div class="services-preview">
    <div class="container">


    <div class="section-heading">
        <div>
            <span class="eyebrow">
                <span class="eyebrow-line"></span>
                WHAT WE OFFER
            </span>

            <h2>Our signature services</h2>

            <p>
                Carefully chosen treatments to help you feel
                refreshed, confident, and cared for.
            </p>
        </div>

        <a href="{{ route('services.index') }}" class="text-link">
            View all services
            <i class="bi bi-arrow-up-right"></i>
        </a>
    </div>

    <div class="service-grid">

        @foreach ($services as $service)
            <article class="service-card">

                <div class="service-icon">
                    <i class="bi {{ $service['icon'] }}"></i>
                </div>

                <span class="service-label">OUR SERVICES</span>

                <h3>{{ $service['name'] }}</h3>

                <p>{{ $service['description'] }}</p>

                <div class="service-card-bottom">
                    <span class="service-price">
                        From Rs. {{ number_format($service['price']) }}
                    </span>

                    <a href="{{ route('contact') }}"
                       aria-label="Enquire about {{ $service['name'] }}">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>

            </article>
        @endforeach

    </div>

</div>


</div>

<div class="experience-panel">
    <div class="container experience-grid">


    <div class="experience-image">
        <img
            src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?auto=format&fit=crop&w=1000&q=85"
            alt="Professional beauty salon styling area"
            loading="lazy"
        >
    </div>

    <div class="experience-copy">
        <span class="eyebrow">
            <span class="eyebrow-line"></span>
            THE ELEGANCE EXPERIENCE
        </span>

        <h2>A little luxury, made personal.</h2>

        <p>
            We believe that beauty services should feel as
            thoughtful as they look. Our approach combines
            attentive service, professional care, and an
            inviting atmosphere.
        </p>

        <p>
            Whether you are preparing for a special occasion
            or simply taking time for yourself, we want every
            visit to feel worthwhile.
        </p>

        <a href="{{ route('about') }}" class="button button-outline">
            More About Us
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

</div>


</div>

<div class="booking-banner">
    <div class="container booking-content">
        <div>
            <span class="eyebrow">YOUR NEXT VISIT STARTS HERE</span>
            <h2>Make time for yourself.</h2>
            <p>Explore our services and get in touch to plan your visit.</p>
        </div>

    <a href="{{ route('contact') }}" class="button button-light">
        Contact Our Team
        <i class="bi bi-arrow-up-right"></i>
    </a>
</div>

</div>

@endsection
