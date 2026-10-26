<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title', 'Elegance Salon')</title>

<meta name="description"
      content="Discover professional beauty services, personalized care, and elegant experiences at Elegance Salon.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
      rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>

<header class="site-header">
    <div class="container navigation">


    <a href="{{ route('home') }}" class="brand">
        <span class="brand-mark">E</span>

        <span class="brand-text">
            <strong>Elegance</strong>
            <small>BEAUTY &amp; WELLNESS</small>
        </span>
    </a>

    <button class="menu-toggle"
            type="button"
            aria-label="Toggle navigation"
            aria-expanded="false"
            aria-controls="main-navigation">
        <i class="bi bi-list"></i>
    </button>

    <nav class="main-navigation" id="main-navigation">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('services.index') }}">Services</a>
        <a href="{{ route('contact') }}">Contact</a>

        <a href="{{ route('feedback.index') }}">Feedback</a>

        <a href="{{ route('contact') }}" class="nav-button">
            Book a Visit
            <i class="bi bi-arrow-up-right"></i> 
        </a>
    </nav>

</div>


</header>

<main>
    @yield('content')
</main>

<footer class="site-footer">
    <div class="container footer-grid">


    <div class="footer-brand">
        <a href="{{ route('home') }}" class="brand footer-logo">
            <span class="brand-mark">E</span>

            <span class="brand-text">
                <strong>Elegance</strong>
                <small>BEAUTY &amp; WELLNESS</small>
            </span>
        </a>

        <p>
            Thoughtful beauty services, personal attention,
            and a little time dedicated entirely to you.
        </p>
    </div>

    <div class="footer-links">
        <h3>Explore</h3>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('services.index') }}">Our Services</a>
        <a href="{{ route('contact') }}">Contact</a>
    </div>

    <div class="footer-links">
        <h3>Get in Touch</h3>
        <p>Phone: +92 XXX XXXXXXX</p>
        <p>Email: hello@example.com</p>
        <p>Karachi, Pakistan</p>
    </div>

</div>

<div class="container footer-bottom">
    <p>
        &copy; {{ date('Y') }} Elegance Salon.
        All rights reserved.
    </p>

    <p>Designed with care.</p>
</div>


</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
